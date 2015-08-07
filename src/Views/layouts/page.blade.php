<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 style="display:inline-block; margin-right:40px;">Page (Front End)</h1>
        
        
    </div>
    <hr>
    <div class="container">
        @yield('content')
    </div>


    <br>
    <br>
    <br>
    <br>
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>