<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>weather forecast</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
    </head>

    <body>
        <nav class="navbar navbar-default orange">
            <div class="container-fluid">
                @yield('header')
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            @yield('content')
        </div>
            @yield('footer')



    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>

    </html>