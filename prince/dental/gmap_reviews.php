<style>
    body {
        direction: rtl; /* Set direction to RTL */
        text-align: center; /* Center all text */
    }
    .review-card {
        transition: transform 0.3s;
    }
    .review-card:hover {
        transform: scale(1.05);
    }
    .review-author {
        font-weight: bold;
        color: #0d6efd;
    }
    .review-rating {
        color: #ffc107; /* Gold color for rating */
    }
    .no-reviews {
        text-align: center;
        font-size: 1.2em;
        color: #6c757d;
    }
    .review-photo {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }
    .review-link {
        display: block;
        margin-top: 10px;
        font-size: 0.9em;
    }
</style>

<div class="container my-5">
    <h2 class="mb-4">آراء العملاء</h2> <!-- Centered and RTL text -->
    <div class="row justify-content-center">
        <?php
        // Define your API key
        $apiKey = 'AIzaSyAAZ90wzgTYiDpYeZf6uQbf_XcDhxD8VcY'; // Use a secure method to store API keys

        // Define the Place ID for the specific location
        $placeId = 'ChIJG9E1XFVrXz4RtVjLz1o2Cdc';  // Replace with the actual Place ID of the location

        try {
            // URL for the Place Details API request
            $detailsUrl = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=name,rating,reviews&key=$apiKey";

            // Initialize a cURL session to get place details
            $ch = curl_init();
            if ($ch === false) {
                throw new Exception('Failed to initialize cURL session');
            }

            curl_setopt($ch, CURLOPT_URL, $detailsUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $detailsResponse = curl_exec($ch);

            if ($detailsResponse === false) {
                throw new Exception('cURL error: ' . curl_error($ch));
            }

            curl_close($ch);

            // Decode the JSON response
            $detailsData = json_decode($detailsResponse, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('JSON decoding error: ' . json_last_error_msg());
            }

            // Check if the place details are available
            if (isset($detailsData['result'])) {
                // Check if there are reviews available
                if (isset($detailsData['result']['reviews'])) {
                    // Filter 5-star reviews
                    $fiveStarReviews = array_filter($detailsData['result']['reviews'], function ($review) {
                        return $review['rating'] == 5;
                    });

                    // Sort reviews by the length of their text content in descending order
                    usort($fiveStarReviews, function ($a, $b) {
                        return strlen($b['text']) - strlen($a['text']);
                    });

                    // Limit to the first 10 reviews
                    $fiveStarReviews = array_slice($fiveStarReviews, 0, 10);

                    if (!empty($fiveStarReviews)) {
                        // Loop through the sorted 5-star reviews and display them in Bootstrap cards
                        foreach ($fiveStarReviews as $review) {
                            echo '<div class="col-md-4 mb-4">';
                            echo '<div class="card review-card h-100 shadow-sm">';
                            echo '<div class="card-body">';
                            // Display customer photo if available
                            if (isset($review['profile_photo_url'])) {
                                echo '<img src="' . htmlspecialchars($review['profile_photo_url']) . '" alt="Customer Photo" class="review-photo">';
                            }
                            echo '<h5 class="review-author">' . htmlspecialchars($review['author_name']) . '</h5>';
                            echo '<h6 class="review-rating mb-3">التقييم: ' . str_repeat('★', $review['rating']) . '</h6>';
                            echo '<p class="card-text">' . htmlspecialchars($review['text']) . '</p>';
                            // Display the review link
                            if (isset($review['author_url'])) {
                                echo '<a href="' . htmlspecialchars($review['author_url']) . '" target="_blank" class="review-link" style="text-decoration: none;">عرض المراجعة الأصلية</a>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="no-reviews">لا توجد آراء بخمس نجوم لهذا المكان.</p>';
                    }
                } else {
                    echo '<p class="no-reviews">لم يتم العثور على آراء لهذا المكان.</p>';
                }
            } else {
                throw new Exception('لم يتم العثور على تفاصيل لهذا المكان أو معرف المكان غير صالح.');
            }
        } catch (Exception $e) {
            echo '<p class="text-danger">خطأ: ' . $e->getMessage() . '</p>';
        }
        ?>
    </div>
</div>
