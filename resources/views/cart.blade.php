<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart1'))
                @foreach(session('cart1') as $id =>$details)
                    <tr>
                        <td>{{$details['title']}}</td>
                        <td>{{$details['author']}}</td>
                        <td>{{$details['price']}}</td>
                        <td>{{$details['quantity']}}</td>

                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>