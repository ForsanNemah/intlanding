<style>
    .package {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        text-align: center;
        transition: transform 0.2s ease-in-out;
    }

    .package:hover {
        transform: scale(1.05);
    }

    .no-gutters > .col {
        padding: 0;
    }

    /* Add spacing between packages in desktop mode */
    @media (min-width: 768px) {
        .package-col {
            margin-bottom: 30px;
            padding: 0 15px;
        }
    }

    /* Add some spacing for small screens */
    .package-col {
        margin-bottom: 20px;
    }
</style>

<div class="container-fluid mt-5" id="service1_id">
    <h2 class="mb-4 text-center">خدماتنا</h2>
    <div class="row no-gutters" id="service-container"></div>
</div>

<!-- Modal HTML -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appointmentModalLabel">حجز موعد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>اختر أحد الخيارات التالية:</p>
                <a id="modal-href1" href="#" class="mb-2 btn btn-primary w-100">جلسة باللغة العربية</a>
                <a id="modal-href2" href="#" class="mb-2 btn btn-primary w-100">جلسة باللغة الانجليزية</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Array of services to dynamically generate HTML content
    const services = [
        {
            title: 'جلسة علاج فردي للاكتئاب',
            description: 'تستخدم جلسات العلاج الفردي لدينا لعلاج الاكتئاب والقلق تقنية برمجة العقل السريعة الخاصة بنا للتعامل بفعالية مع الصدمات...',
            imgSrc: 'packages/1.webp',
            alt: 'جلسة علاج فردي للاكتئاب',
            dataHref1: 'https://tachafi-by-cm.zbooni.com/products/jls-lj-lfrd-s-h',
            dataHref2: 'https://tachafi-by-cm.zbooni.com/products/individuals'
        },
        {
            title: 'جلسة علاج زوجي',
            description: 'في جلسات العلاج الزوجي لدينا، نعمل عن قرب مع الشريكين لإعادتهم إلى اللحظة التي تواصلا فيها لأول مرة...',
            imgSrc: 'packages/2.webp',
            alt: 'جلسة علاج زوجي',
            dataHref1: 'https://tachafi-by-cm.zbooni.com/products/lj-lzwjyn-s',
            dataHref2: 'https://tachafi-by-cm.zbooni.com/products/couple-therapy-1118679'
        },
        {
            title: 'جلسة علاج للمراهقين',
            description: 'في "تشافي"، يستخدم أطباؤنا ومعالجونا تقنية برمجة العقل السريعة لمساعدة المراهقين على تجاوز أصعب مراحل المراهقة...',
            imgSrc: 'packages/3.webp',
            alt: 'جلسة علاج للمراهقين',
            dataHref1: 'https://tachafi-by-cm.zbooni.com/products/t-1123548',
            dataHref2: 'https://tachafi-by-cm.zbooni.com/products/teens-therapy'
        },
        {
            title: 'جلسة علاج الأطفال ',
            description: 'ساعد طفلك على تجاوز التحديات العاطفية والسلوكية من خلال جلسات علاجية تفاعلية وممتعة...',
            imgSrc: 'packages/4.webp',
            alt: 'علاج الصدمات والحزن',
            dataHref1: 'https://tachafi-by-cm.zbooni.com/products/jls-lj-ltfl-s',
            dataHref2: 'https://tachafi-by-cm.zbooni.com/products/child-therapy-1118680'
        }
    ];

    // Function to generate service HTML
    function generateServiceHTML(service) {
        return `
            <div class="col-sm-6 col-md-3 package-col mainbg2" data-aos="zoom-in-up">
                <div class="package">
                    <img src="${service.imgSrc}" class="img-fluid" alt="${service.alt}" loading="lazy">
                    <h5 class="mt-3">${service.title}</h5>
                    <p>${service.description}</p>
                    <button class="btn btn-primary open-modal mb-2" data-href1="${service.dataHref1}" data-href2="${service.dataHref2}">حجز موعد</button>
                </div>
            </div>
        `;
    }

    // Populate services in the container
    const serviceContainer = document.getElementById('service-container');
    services.forEach(service => {
        serviceContainer.innerHTML += generateServiceHTML(service);
    });

    // JavaScript to handle modal functionality
    document.querySelectorAll('.open-modal').forEach(button => {
        button.addEventListener('click', function() {
            const href1 = this.getAttribute('data-href1');
            const href2 = this.getAttribute('data-href2');

            // Set the href of the modal buttons
            document.getElementById('modal-href1').setAttribute('href', href1);
            document.getElementById('modal-href2').setAttribute('href', href2);

            // Show the modal
            var modal = new bootstrap.Modal(document.getElementById('appointmentModal'));
            modal.show();
        });
    });
</script>
