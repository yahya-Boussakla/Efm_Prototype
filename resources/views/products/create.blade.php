<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        @method('post')
        <input type="text" name="name">
        <input type="number" name="price">
        <select name="category_id" id="">
            <option value="">choose a category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button type="submit">create</button>
    </form>
</body>
</html>