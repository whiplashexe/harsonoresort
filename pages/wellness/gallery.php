<section id="gallery">
    <div class="container">
        <div class="content">
            <header class="gallery-header">
                <h2 class="title">Gallery</h2>
            </header>

            <div class="card-wrapper">
                <?php foreach ([1, 2, 3, 4] as $items): ?>
                    <div class="gallery-card">
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="cover">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        $('#gallery .card-wrapper').slick({
            arrows: true,
            slidesToShow: 3,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }

            }]
        })
    })
</script>