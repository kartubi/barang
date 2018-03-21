<!DOCTYPE html>
<html>
<head>
    <title>
        TITLE
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
<nav class="base-color lighten-1" role="navigation">
    <div class="nav-wrapper container"><a class="h6" href="/book">EVENT</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="">HOME</a></li>
            <li><a href="">DAFTAR</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>