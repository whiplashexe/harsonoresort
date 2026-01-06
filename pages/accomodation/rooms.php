<section id="rooms">
    <div class="container">
        <div class="content">
            <header class="rooms-header">
                <h2 class="title">ROOMS, SUITE & VILLA</h2>
            </header>

            <div class="card-wrapper">
                <?php foreach ([1, 2, 3, 4] as $items): ?>
                    <div class="room-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="cover">
                            <div class="content-wrapper">
                                <h3 class="title">Lorem ipsum dolor sit amet consectetur.</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic labore dignissimos libero harum excepturi fuga, amet error architecto alias molestias. Blanditiis veritatis optio dolorum nesciunt sapiente hic repellendus sunt, aliquid omnis enim cum expedita quae iure? Eligendi architecto nesciunt, perferendis numquam tempore labore inventore. Magni, quisquam nisi reprehenderit, laboriosam hic eligendi aspernatur debitis libero eos minus sed consequuntur ratione, perspiciatis facilis quia dolorem. Aut molestiae consectetur repellat obcaecati! Cumque quibusdam ullam tempora. Nulla vero possimus maiores a rerum ex accusantium odio officiis. Sed sequi dicta esse quasi at iste ratione tempore itaque, qui deserunt officiis odio. Voluptatum beatae reprehenderit inventore?</p>
                                <a href="#" class="cta">Explore More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        $('#rooms .card-wrapper').slick({
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