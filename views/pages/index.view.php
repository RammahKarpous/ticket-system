<div>
    <h1>Concerts near to you</h1>
    <p>Book your tickets now for the following concerts in your area:</p>

    <?php foreach ( $tickets as $ticket ) : ?>
        <?php component('card', [
            'title' => "In {$ticket['town']}, {$ticket['artist']} concert on {$ticket['date']}",
            'excerpt' => $ticket['excerpt'],
            'buttonText' => 'Buy tickets'
        ]) ?>
    <?php endforeach; ?>
</div>