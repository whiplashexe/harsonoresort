<?php
$items_data = json_decode(json_encode([
    [
        'title' => 'Private Riverside',
        'description' => 'Tucked beside the gentle flow of the river, the Private Riverside setting offers an intimate sanctuary for life’s most meaningful moments.'
    ],
    [
        'title' => 'Aska River Lawn',
        'description' => 'Framed by lush greenery and the gentle flow of the river, the lawn creates a stunning backdrop for larger weddings.'
    ],
    [
        'title' => 'Aska Private Dining Room',
        'description' => 'Thoughtfully appointed and discreetly serviced, it is the perfect venue for those seeking an elegant and personal dining occasion.'
    ],
]));

?>

<section id="wedding-spaces">
    <div class="container">
        <div class="content">
            <header class="wedding-spaces-header">
                <h2 class="title">Wedding + Event Spaces</h2>
                <p class="description">Discover a collection of elegant wedding and event spaces at Harsono Boutique Resort, from
                    serene riverside settings to intimate venues designed for unforgettable celebrations.</p>
            </header>

            <div class="card-wrapper">
                <?php foreach ($items_data as $items): ?>
                    <div class="wedding-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="cover">
                        </div>
                        <div class="card-content">
                            <h3 class="title"><?= $items->title ?></h3>
                            <p class="description"><?= $items->description ?></p>
                            <a href="#" class="cta">Explore More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>