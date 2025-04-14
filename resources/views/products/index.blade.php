<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
</head>
<body>

    <form action="{{route('products.search')}}" methode="GET">
        <input type="text" name="query">
        <button type="submit">search</button>
    </form>

    <button onclick="window.location.href='{{route('products.create')}}'">add product</button>
    <table>
        <th>
            <tr>
                <td>name</td>
                <td>price</td>
                <td>category</td>
            </tr>
        </th>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>