<?php

namespace App\Core;

class View
{

    private static string $title = '';
    private static string $view;
    private static array $args;

    /**
     * Displays a view using the specified layout.
     *
     * @param string $view   The name of the view to display.
     * @param string $title  The title of the page.
     * @param string $layout The layout to use for the view.
     * @param array $args The extra stuff passed to the view.
     */
    public static function show(
        string $view,
        string $title = '',
        string $layout = 'app',
        array $args = []
    ) {
        self::setTitle( $title );
        self::$view = $view;
        self::$args = $args;

        if ( file_exists( __DIR__ . "/../../views/layout/{$layout}.php" ) ) {
            require __DIR__ . "/../../views/layout/{$layout}.php";
        }
    }

    /**
     * Sets the title of the page.
     *
     * @param string $title The setter for the title of the page.
     */
    public static function setTitle( string $title )
    {
        if ( !empty( $title ) ) {
            self::$title = $title;
        }
    }

    /**
     * Gets the title of the page.
     *
     * @return string The getter for the title of the page.
     */
    public static function title()
    {
        return self::$title;
    }

    /**
     * Gets the content of a view.
     *
     * @return string The content of the requested view.
     */
    public static function content()
    {
        if ( self::$view ) {
            $view = self::$view;
            extract( self::$args );

            ob_start();
            require __DIR__ . "/../../views/pages/{$view}.view.php";
            return ob_get_clean();
        }
        return '';
    }
}
