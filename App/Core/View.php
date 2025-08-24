<?php

namespace Core;

class View
{

    private static string $title = '';
    private static string $view;

    /**
     * Displays a view using the specified layout.
     *
     * @param string $view   The name of the view to display.
     * @param string $title  The title of the page.
     * @param string $layout The layout to use for the view.
     */
    public static function show( string $view, string $title = '', string $layout = 'app' )
    {
        self::setTitle( $title );
        self::$view = $view;

        if ( file_exists( __DIR__ . "/../../views/layout/{$layout}.php" ) ) {
            require __DIR__ . "/../../views/layout/{$layout}.php";
        }
    }

    /**
     * Sets the title of the page.
     *
     * @param string $title The title of the page.
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
     * @return string The title of the page.
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

            ob_start();
            require __DIR__ . "/../../views/{$view}.view.php";
            return ob_get_clean();
        }
        return '';
    }
}
