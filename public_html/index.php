<?php $user = posix_getpwuid(fileowner(__FILE__))["name"]; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="tilde.team unix group">
        <meta name="author" content="<?=$user?>">
        <meta name="theme-color" content="#00cc00">
        <title><?=$user?>~tilde.team</title>
        <link rel="stylesheet" type="text/css" href="https://tilde.team/css/hacker.css">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <div class="pull-right">
                    <p><a href="https://tilde.team/">&lt;- back to tilde.team</a></p>
                </div>
                <h1><strong>~<?=$user?></strong></h1>
            </div>


            <h1>AAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>

	    <p>Check out your new <a href="blog">blog</a>!</p>
        </div>
    </body>
</html>

