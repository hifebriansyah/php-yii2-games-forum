<!doctype html>
<html lang="en">
<head>
    <title>{block name=title}Games Central{/block}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{$baseUrl}/static/templates/calm-space/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{$baseUrl}/static/templates/calm-space/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{$baseUrl}/static/templates/calm-space/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{$baseUrl}/static/templates/calm-space/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{$baseUrl}/static/templates/calm-space/favicon/favicon-16x16.png">
    <link rel="manifest" href="{$baseUrl}/static/templates/calm-space/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{$baseUrl}/static/templates/calm-space/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Override Template -->
    <link rel="stylesheet" href="{$baseUrl}/static/templates/calm-space/css/override.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{$baseUrl}/static/libs/font-awesome/font-awesome.min.css">

    <!-- Additional CSS -->
    {block name=styles}{/block}
</head>
<body>
    <!-- Content -->
    {block name=nav}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fa fa-gamepad d-inline-block align-top"></i>
                Game Central
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{$baseUrl}">Games</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{$baseUrl}">Threads</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{$baseUrl}">Reviews</a>
                    </li>
                </ul>

                    <input id="search-input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{$baseUrl}">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {/block}

    <!-- Content -->
    {block name=content}{/block}

    <!-- JQ, Popper, Bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- baseUrl -->
    <script>
        $(function(){
            baseUrl = '{$baseUrl}'
        })
    </script>

    <!-- Additional script -->
    {block name=scripts}{/block}
</body>
</html>