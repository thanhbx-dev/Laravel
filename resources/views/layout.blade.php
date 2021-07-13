<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
//         <link rel="stylesheet" href="link bootstrap"/>
        <title>@yield('title')</title>
    </head>
    <body>
        <div>Header</div>
        <div>@include('welcome')</div>
        <div>@yield("contents")</div>
        <div>Footer</div>
    </body>
</html>
