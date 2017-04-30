<?php 
/**
********************************
* Author: Douglas Phillips
* Description: One-page template
* MIT License: https://github.com/fbdouglas/floppy-onepage/blob/master/LICENSE
********************************
**/

require("init.php"); 

?>
<!doctype-html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $website_name; ?></title>
        <link rel="stylesheet" href="assets/css/application.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        
        <style>
            body {
                background: #212121 url('https://arma3.com/assets/img/apex/screenshots/arma3_apex_screenshot_05.jpg') no-repeat;
                background-size: cover;
                filter: brightness(2.1) grayscale(0.6);
            }
        </style>
    </head>
    <body>
        <header class="header" id="header">
            <table class="dp-headlogo" style="width: 50%;">
                <tr>
                    <th><a href=""><?php echo $website_name; ?></a></th>
                </tr>
            </table>
        </header>
        <div class="dp-landpage">
            <h1><?php echo $website_header; ?></h1>
            <!-- ICONS PROVIDED BY FREEPIK,ZURB -->
            <a href=""><img src="<?php echo $website_twittericon; ?>"></a>
            <a href=""><img src="<?php echo $website_steamicon; ?>"></a>
            <p class="dp-small"><?php echo $website_socialtxt; ?></p>
        </div>
        <div class="dp-footer">
            <p class="right">Created By: <a href="https://douglassoftwarefr.com">DouglasSoftware</a></p>
            <p class="left"><?php echo $website_copyright; ?></p>
        </div>
    </body>
</html>