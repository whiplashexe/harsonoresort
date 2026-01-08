<section id="items">
    <div class="container">
        <div class="content">
            <nav class="items-header">
                <button class="nav-item aska-nav active">Aska Restarant</button>
                <button class="nav-item kinta-nav">Kinta Lounge & Bar</button>
                <button class="nav-item dhika-nav">Dhika Coffee & Bar</button>
            </nav>

            <div id="aska-content" class="content-wrapper">
                <div class="images">
                    <img class="image-1 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                    <img class="image-2 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                </div>
                <div class="description-content">
                    <h3 class="title">Aska Restaurant</h3>
                    <p class="description">
                        Set along the tranquil edge of the Tjampuhan River, Aska Restaurant presents an all-day dining experience rooted in place. Menus celebrate Balinese and international flavours, thoughtfully prepared using ingredients sourced as locally as possible, honouring freshness, seasonality, and honest craft. The setting blends contemporary design with a natural sensibility, allowing the surroundings to gently frame each dining moment.
                        <br>
                        <br>
                        Dine outdoors beside the river, where flowing water and lush greenery create a naturally serene backdrop from morning through evening. For a more intimate occasion, a private dining room offers a secluded setting for a romantic dinner, an unhurried moment to share, shaped by nature and quiet elegance.
                        <br>
                        <br>
                        <strong>Opening Hours: <br>7 AM - 10 PM</strong>
                    </p>
                    <div class="ctas">
                        <a href="#" class="cta cta-menu">See Menu</a>
                        <a href="#" class="cta cta-reserve">Reserve Now</a>
                    </div>
                </div>
            </div>

            <div id="kinta-content" class="content-wrapper">
                <div class="images">
                    <img class="image-1 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                    <img class="image-2 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                </div>
                <div class="description-content">
                    <h3 class="title">Kinta Lounge & Bar</h3>
                    <p class="description">
                        Set within an effortless beachside atmosphere, Kinta Lounge & Bar offers a relaxed setting to unwind throughout the day. Enjoy a thoughtfully curated selection of dishes from lunch through dinner, or refresh with handcrafted beverages during happy hour. Now enhanced with an inviting pool, the experience unfolds seamlessly, where sun, sea breeze, and unhurried moments come together.
                        <br>
                        <br>
                        <strong>Opening Hours: <br>11 AM – 9 PM</strong>
                    </p>
                    <div class="ctas">
                        <a href="#" class="cta cta-menu">See Menu</a>
                        <a href="#" class="cta cta-reserve">Reserve Now</a>
                    </div>
                </div>
            </div>

            <div id="dhika-content" class="content-wrapper">
                <div class="images">
                    <img class="image-1 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                    <img class="image-2 image" src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="gallery">
                </div>
                <div class="description-content">
                    <h3 class="title">Dhika Coffee & Bar</h3>
                    <p class="description">
                        Located within the lobby, Dhika Coffee & Bar offers a relaxed pause throughout the day. Set against a breezy, serene atmosphere, it is an inviting place to enjoy specialty coffee, fresh drinks, and a selection of light sweet and savoury bites. An effortless setting for quiet moments, casual conversations, or a gentle break between experiences.
                        <br>
                        <br>
                        <strong>Opening Hours: <br>9 AM – 9 PM</strong>
                    </p>
                    <div class="ctas">
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
        const askaBtn = document.querySelector('#items .nav-item.aska-nav');
        const kintaBtn = document.querySelector('#items .nav-item.kinta-nav');
        const dhikaBtn = document.querySelector('#items .nav-item.dhika-nav');

        const askaContent = document.querySelector('#items #aska-content');
        const kintaContent = document.querySelector('#items #kinta-content');
        const dhikaContent = document.querySelector('#items #dhika-content');

        askaBtn.addEventListener('click', () => {
            askaBtn.classList.add('active')
            kintaBtn.classList.remove('active')
            dhikaBtn.classList.remove('active')

            askaContent.style.display = 'flex'
            kintaContent.style.display = 'none'
            dhikaContent.style.display = 'none'
        })

        kintaBtn.addEventListener('click', () => {
            askaBtn.classList.remove('active')
            kintaBtn.classList.add('active')
            dhikaBtn.classList.remove('active')

            askaContent.style.display = 'none'
            kintaContent.style.display = 'flex'
            dhikaContent.style.display = 'none'
        })

        dhikaBtn.addEventListener('click', () => {
            askaBtn.classList.remove('active')
            kintaBtn.classList.remove('active')
            dhikaBtn.classList.add('active')

            askaContent.style.display = 'none'
            kintaContent.style.display = 'none'
            dhikaContent.style.display = 'flex'
        })
    })
</script>