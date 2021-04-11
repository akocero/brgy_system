<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('custom_styles')
    <style>
        html {
            font-size: 8px;
        }
        body {
            background-color: rgb(63, 63, 63);
        }
        .paper {
            background: white;
            width: 42%;
            margin: 2rem auto;
            overflow: hidden;
            padding: 2rem 22px;
            /* padding: 30px; */
        }  
    </style>
    @include('pdf_template.clearance.view_only_style')
</head>
<body>
    @yield('content')
</body>
</html>