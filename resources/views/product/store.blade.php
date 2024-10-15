<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="main.css" rel="stylesheet" >
    </head>
    <body class="pizza">
        <form action="save-items" method="post">
            @csrf
            <input type="text" name="name" placeholder="name"><br>
            <input type="number" name="price" placeholder="price"><br>
            <input type="number" name="quantity" ><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
