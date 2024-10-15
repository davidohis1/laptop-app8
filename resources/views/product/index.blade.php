<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Product List</h1>
    </div>
    @if (Session::has("success"))
        <div>
            {{Session::get("success")}}
        </div>
    @endif    
</body>
</html>