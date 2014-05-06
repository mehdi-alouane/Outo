<?php
/**
 * Important notes:
 * 
 * 1. The .htacess file should have the following lines:
 * 
 *    RewriteEngine On
 *    RewriteCond %{REQUEST_FILENAME} !-f
 *    RewriteCond %{REQUEST_FILENAME} !-d
 *    RewriteRule ^/?(.*) index.php [L]
 *
 * 2. All the pages should be saved as .php files
 *
 * 3. This URL Manager supposed that all the pages are stored under "pages" directory which
 *    is under the root directory (you can change it!).
 *
 * 4. The main layout (footer & header) should be stored under "layouts" directory which is
 *    under the root directory (you can change it!).
 */

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
    if (!file_exists($root . '/etc/', 'front-page/' . $file_name . '.php', '.html'))
    {
        header('HTTP/1.0 404 Not Found');
        $file_name = '404';
    }

    // Rendering the header
    require_once $root . '/etc/header.php';
    // Rendering the requested page
    require_once $root . '/ect/', '/front-page/' . $file_name . '.php', '.html';
    // Rendering the footer
    require_once $root . '/etc/footer.php';
    exit;
}
