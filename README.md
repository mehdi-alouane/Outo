##Outo
A Very Simple  ```PHP ``` Open Source Web Addresses (URLs) Manager

####Important notes:
 * 1. The .htacess file should have the following lines:
 *    RewriteEngine On
 *    RewriteCond ```%{REQUEST_FILENAME} !-f ```
 *    RewriteCond  ```%{REQUEST_FILENAME} !-d ```
 *    RewriteRule  ```^/?(.*) ```  ```index.php ``` [L]
 * 2. All the pages should be saved as  ```.php ``` files
 * 3. This URL Manager supposed that all the pages are stored under "pages" directory which
 *    is under the root directory (you can change it!).
 * 4. The main layout (footer & header) should be stored under "layouts" directory which is
 *    under the root directory (you can change it!).
