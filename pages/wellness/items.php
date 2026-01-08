<section id="items">
    <div class="container">
        <div class="content">
            <nav class="items-header">
                <button class="nav-item tjampuhan-nav active">TJAMPUHAN SPA & SALON</button>
                <button class="nav-item holistic-nav">HOLISTIC WELLNESS RITUALS</button>
                <button class="nav-item gym-nav">THE GYM</button>
            </nav>

            <div id="tjampuhan-content" class="content-wrapper">
                <div class="images">
                    <img class="image-1 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                    <img class="image-2 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                </div>
                <div class="description-content">
                    <h3 class="title">Tjampuhan Spa & Salon</h3>
                    <p class="description">
                        Whether travelling solo or as a couple, Tjampuhan Spa & Salon offers a sanctuary to gently step away from the world. The experience is centred on therapeutic-inspired treatments that draw from time-honoured Balinese healing traditions, thoughtfully combined with organic spa products inspired by Indonesia’s heirloom beauty secrets. Set within luxurious riverside pavilions, each ritual unfolds to the soothing rhythm of flowing water. Complete your journey with a restorative soak in a terrazzo bathtub overlooking the river, an intimate moment of quiet indulgence, shaped by nature and stillness.
                        <br><br>

                        <strong>Opening Hours: <br>9 AM – 9 PM</strong>
                    </p>
                    <div class="ctas">
                        <a href="#" class="cta cta-menu">Reserve Your Session</a>
                        <a href="#" class="cta cta-reserve">SPA & Salon Menu</a>
                    </div>
                </div>
            </div>

            <div id="holistic-content" class="content-wrapper">
                <div class="images">
                    <img class="image-1 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                    <img class="image-2 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                </div>
                <div class="description-content">
                    <h3 class="title">Holistic Wellness Rituals</h3>
                    <p class="description">
                        Wellness here unfolds as a holistic journey of renewal, thoughtfully curated to nurture body, mind, and soul. From mindful movement and restorative practices to traditional Balinese purification rituals, each experience is guided with intention and cultural reverence. Rooted in ancient wisdom and gentle rhythms, these rituals invite deep cleansing, quiet reflection, and a renewed sense of balance, ensuring every aspect of well-being is thoughtfully embraced.
                        <br>
                        <br>
                    </p>
                    <div class="ctas">
                        <a href="#" class="cta cta-menu">Reserve Your Session</a>
                        <a href="#" class="cta cta-reserve">Wellbeing Program Menu</a>
                    </div>
                </div>
            </div>

            <div id="gym-content" class="content-wrapper">
                <div class="images">
                    <img class="image-1 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                    <img class="image-2 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                </div>
                <div class="description-content">
                    <h3 class="title">The Gym</h3>
                    <p class="description">
                        Thoughtfully equipped with fresh towels and a water dispenser, the space offers a serene setting for exercise, gently framed by river views and manicured gardens, where movement feels natural and unhurried.
                        <br>
                        <br>
                        <strong>Opening Hours: <br>24 Hours</strong>
                    </p>
                    <div class="ctas" style="opacity: 0;">
                        <a href="#" class="cta cta-menu">See Menu</a>
                        <a href="#" class="cta cta-reserve">Reserve Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tjampuhanBtn = document.querySelector('#items .nav-item.tjampuhan-nav');
        const holisticBtn = document.querySelector('#items .nav-item.holistic-nav');
        const gymBtn = document.querySelector('#items .nav-item.gym-nav');

        const tjampuhanContent = document.querySelector('#items #tjampuhan-content');
        const holisticContent = document.querySelector('#items #holistic-content');
        const gymContent = document.querySelector('#items #gym-content');

        tjampuhanBtn.addEventListener('click', () => {
            tjampuhanBtn.classList.add('active')
            holisticBtn.classList.remove('active')
            gymBtn.classList.remove('active')

            tjampuhanContent.style.display = 'flex'
            holisticContent.style.display = 'none'
            gymContent.style.display = 'none'
        })

        holisticBtn.addEventListener('click', () => {
            tjampuhanBtn.classList.remove('active')
            holisticBtn.classList.add('active')
            gymBtn.classList.remove('active')

            tjampuhanContent.style.display = 'none'
            holisticContent.style.display = 'flex'
            gymContent.style.display = 'none'
        })

        gymBtn.addEventListener('click', () => {
            tjampuhanBtn.classList.remove('active')
            holisticBtn.classList.remove('active')
            gymBtn.classList.add('active')

            tjampuhanContent.style.display = 'none'
            holisticContent.style.display = 'none'
            gymContent.style.display = 'flex'
        })
    })
</script>