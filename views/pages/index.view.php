<div class="container">
    <h1 class="page-title">Concerts near to you</h1>
    <p>Book your tickets now for the following concerts in your area:</p>

    <div class="events">
        <?php foreach ( $tickets as $ticket ) : ?>
            <?php component('card', [
                'title' => "In {$ticket['town']}, {$ticket['artist']} concert on {$ticket['date']}",
                'excerpt' => $ticket['excerpt'],
                'buttonText' => 'Buy tickets'
            ]) ?>
        <?php endforeach; ?>
    </div>
</div>