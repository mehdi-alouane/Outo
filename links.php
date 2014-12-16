<?php

if (!empty($_SERVER['REQUEST_URI']))
{
    $root = dirname(__FILE__);

    // The requested URI
    $file_name = $_SERVER['REQUEST_URI'];

    // The actual index page (home page) must have another name or another location to avoid
    // recursion, we supposed that it's in the pages directory with "home.php" name (you can
    // change it!).
    if ($file_name == '/index.php' || $file_name == '/')
    {
        $file_name = 'home';
    }

    // If the requested file is not exists, the 404 page (which must be in the "pages"
    // directory) will be rendered.
    if (!file_exists($root . '/etc/',  . $file_name . '.php', '.html'))
    {
        header('HTTP/1.0 404 Not Found');
        $file_name = '404';
    }

    // Rendering the header
    require_once $root . '/etc/header.php';
    // Rendering the requested page
    require_once $root . '/ect/',  . $file_name . '.php', '.html';
    // Rendering the footer
    require_once $root . '/etc/footer.php';
    exit;
}
