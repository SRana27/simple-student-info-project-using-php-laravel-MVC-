<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
</head>
<body>
@include('include.header')
@yield('content')
@include('include.footer')

<script src="{{asset('assets')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
