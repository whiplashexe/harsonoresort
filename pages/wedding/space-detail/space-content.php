
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
?>

<section id="space-content">
  <div class="container">
    <div class="content">
      <div class="images-wrapper">
        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="cover">
        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="cover">
      </div>
      <div class="content-wrapper">
        <h1 class="title">Aska River Lawn</h1>
        <p class="description">
          Gracefully set along the river’s edge, Aska River Lawn
          offers a picturesque open-air setting for celebrations that
          call for space, elegance, and natural beauty. Framed by
          lush greenery and the gentle flow of the river, the lawn
          creates a stunning backdrop for larger weddings, garden
          ceremonies, and memorable wedding or event dinners
          beneath the open sky.
          <br>
          Whether styled for a romantic ceremony or transformed
          into an elegant dining venue, the lawn accommodates
          beautifully presented buffet arrangements, refined
          table settings, and cultural touches such as traditional
          Balinese Rindik music. Thoughtful services, including
          valet assistance and a complimentary villa stay, ensure
          the occasion unfolds seamlessly, allowing hosts and
          guests alike to savour every moment.
        </p>
        <a href="#" class="cta">Explore More</a>
      </div>
      <div class="info-wrapper">
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
      </div>
    </div>
  </div>
</section>