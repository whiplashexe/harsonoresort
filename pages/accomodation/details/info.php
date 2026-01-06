<?php

$capacity_data = json_decode(json_encode([
    [
        'title' => '2 Guest',
        'icon'  => 'fa-solid fa-user-group'
    ],
    [
        'title' => '50 sqm',
        'icon'  => 'fa-solid fa-expand'
    ],
]));

$view_data = json_decode(json_encode([
    [
        'title' => 'Partial View',
        'icon'  => 'fa-solid fa-tree'
    ],
    [
        'title' => 'River',
        'icon'  => 'fa-solid fa-water'
    ],
]));

$feature_data = json_decode(json_encode([
    [
        'title' => 'Private Terrace',
        'icon'  => 'fa-solid fa-door-open'
    ],
    [
        'title' => 'Complimentary Wi-Fi',
        'icon'  => 'fa-solid fa-wifi'
    ],
    [
        'title' => 'In-Room Safe',
        'icon'  => 'fa-solid fa-vault'
    ],
    [
        'title' => 'Bathtub',
        'icon'  => 'fa-solid fa-bath'
    ],
    [
        'title' => 'Sharing Pool',
        'icon'  => 'fa-solid fa-person-swimming'
    ],
    [
        'title' => 'Coffee & Tea Making Facilities',
        'icon'  => 'fa-solid fa-mug-hot'
    ],
    [
        'title' => 'Daily Breakfast',
        'icon'  => 'fa-solid fa-utensils'
    ],
]));
?>


<section id="info">
    <div class="container">
        <div class="content">
            <div class="capacity-wrapper">
                <h3 class="title">Capacity & Size</h3>
                <div class="items-wrapper">
                    <?php foreach ($capacity_data as $items): ?>
                        <p class="info-item"><i class="<?= $items->icon ?>"></i> <?= $items->title ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="view-wrapper">
                <h3 class="title">View</h3>
                <div class="items-wrapper">
                    <?php foreach ($view_data as $items): ?>
                        <p class="info-item"><i class="<?= $items->icon ?>"></i> <?= $items->title ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="feature-wrapper">
                <h3 class="title">Room Feature</h3>
                <div class="items-wrapper">
                    <?php foreach ($feature_data as $items): ?>
                        <p class="info-item"><i class="<?= $items->icon ?>"></i> <?= $items->title ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>