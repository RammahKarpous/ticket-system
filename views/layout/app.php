<?php use App\Core\View; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo env('APP_NAME') ?> | <?php echo View::title() ?></title>

    <?php View::styles(); ?>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
            </ul>
        </nav>
    </header>

    <h1>App layout</h1>
    
    <?php echo View::content(); ?>

    <footer>
        <p>This is the footer</p>
    </footer>

</body>
</html>