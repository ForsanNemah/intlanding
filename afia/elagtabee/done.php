<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم التسجيل بنجاح</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .success-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            padding: 60px 40px;
            text-align: center;
            max-width: 500px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .success-icon {
            font-size: 4rem;
            color: #48bb78;
            margin-bottom: 20px;
            animation: bounceIn 1s ease-out 0.3s both;
        }
        
        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .success-title {
            color: #2d3748;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        
        .success-message {
            color: #4a5568;
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        
        .btn-home {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: 600;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin-top: 20px;
        }
        
        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
            color: white;
            text-decoration: none;
        }
        
        .checkmark {
            display: inline-block;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #48bb78;
            position: relative;
            margin-bottom: 20px;
            animation: scaleIn 0.6s ease-out 0.5s both;
        }
        
        .checkmark::after {
            content: '';
            position: absolute;
            left: 28px;
            top: 15px;
            width: 15px;
            height: 30px;
            border: solid white;
            border-width: 0 4px 4px 0;
            transform: rotate(45deg);
            animation: checkmarkDraw 0.4s ease-out 0.8s both;
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes checkmarkDraw {
            from {
                height: 0;
            }
            to {
                height: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="checkmark"></div>
        <h1 class="success-title">تم التسجيل بنجاح!</h1>
        <p class="success-message">
            شكراً لك على التسجيل. تم استلام بياناتك بنجاح وسيتم التواصل معك قريباً.
        </p>
        <a href="index.php" class="btn-home">العودة للصفحة الرئيسية</a>
    </div>
    
    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

