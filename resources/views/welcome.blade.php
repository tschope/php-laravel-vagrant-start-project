<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="tschope">
    <title>Rodrigo Tschope - Trip PHP Test</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

</head>
<body>

<div id="app">
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="/"></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar2" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><router-link to="/">Trips</router-link></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1>Trip PHP Test</h1>
                <p>
                    A simple test, based on famous php test, TRIP SORTER! Using Bootstrap template, VueJS 2 with Laravel 5.5
                </p>

            </div>
        </div>


        <router-view class="view"></router-view>


        <footer align="center">
            <p>Created by <a href="http://github.com/tschope">tschope</a>. Enjoy!</p>
        </footer>
    </div>{{-- /container --}}

</div>

{{-- / setting value to your CSRFglobal variables  --}}
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

<script src="/js/app.js"></script>
</body>
</html>