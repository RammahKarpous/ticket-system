<?php

function component(string $name, array $props = []) {
    extract($props);

    if (file_exists(__DIR__ . "/../../views/components/{$name}.php")) {
        require __DIR__ . "/../../views/components/{$name}.php";
    } else {
        echo "<p>Not found component [$name].</p>";
    }
}