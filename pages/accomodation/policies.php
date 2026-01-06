<?php
$policies_data = json_decode(json_encode([
    [
        'title' => 'Check-In & Check Out',
        'description' => 'Check in is 3:00 pm. Check out is 12:00 noon.'
    ],
    [
        'title' => 'Early Arrival / Late Departure',
        'description' => 'If you plan to arrive early, we recommend reserving the villa from the night before to ensure it’s ready upon arrival. For late departures, a check-out until 6:00 pm will incur a 50% charge of one night’s rate; departures after 6:00 pm will be charged at the full nightly rate.'
    ],
    [
        'title' => 'Cancellation Policy',
        'description' => 'Cancellations made up to 7 days prior to arrival are free of charge. Cancellations within 7 days of arrival or no-shows will be charged the full amount of the reservation.'
    ],
]));
?>


<section id="policies">
    <div class="container">
        <div class="content">
            <header class="policies-header">
                <h2 class="title">Room policies</h2>
                <span class="expand">Expand</span>
            </header>

            <div class="card-wrapper">
                <?php foreach ($policies_data as $items): ?>
                    <div class="policy-card">
                        <div class="title-wrapper">
                            <h3 class="title"><?= $items->title ?></h3>
                            <button class="btn"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="description-wrapper">
                            <p class="description"><?= $items->description ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('#policies .policy-card').forEach((card) => {
            const btn = card.querySelector('.btn');
            const icon = btn.querySelector('i');
            btn.addEventListener('click', () => {
                card.classList.toggle('active')
                icon.classList.toggle('fa-plus')
                icon.classList.toggle('fa-minus')
            })
        })
    })
</script>