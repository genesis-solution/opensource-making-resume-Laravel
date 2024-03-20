<?php

/*
|--------------------------------------------------------------------------
| Check if the PHP version installed on the server is a minimum of 8.1.
|--------------------------------------------------------------------------
| If the PHP version currently installed is not 8.1, display an error message 
| prompting the user to update the PHP version on the hosting platform to 8.1.
|
*/

if (version_compare(PHP_VERSION, '8.1') === -1) {
    exit('You need at least PHP '.'8.1'.' to install this application.');
}

/*
|--------------------------------------------------------------------------
| Check if the Application is installed
|--------------------------------------------------------------------------
| If the application .env file does not exist or the application is installed,
| redirect the traffic to the public directory where further logic is applied.
|
*/
if ( ! file_exists(__DIR__.'/.env') || ! (preg_match('/APP_INSTALLED=(true|1)/', file_get_contents(__DIR__.'/.env'))) ) {
    header("Location: public");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>File .htaccess Error</title>
    <style>
        body {
            background: rgb(250, 250, 250);
            color: rgba(0,0,0,.5);
            padding: 35px;
        }
        .logo {
            text-align: center;
            margin-bottom: 25px;
        }
        img {
            max-width: 200px;
        }
        .section {
            background: rgb(255, 255, 255);
            margin: auto;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 35px;
            border-radius: 4px;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            margin: 0 0 15px;
            color: rgba(0,0,0,.65);
        }
        p {
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="logo">
    <img class="img-responsive" src="/public/img/logo.png" alt="logo">
</div>
<div class="section">
    <h1>File .htaccess not found!</h1>
    <p>Seek assistance from our <a href="https://help.carcani.com" target="_blank">HelpDesk</a> to explore potential solutions.</p>
</div>
</body>
</html>
