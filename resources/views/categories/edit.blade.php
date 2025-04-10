<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('categories.update',$category)}}" method="post">
        @csrf
        @method('put')
        <input type="text" value="{{$category->name}}" name="name">
        <input type="text" value="{{$category->slug}}" name="slug">
        <button type="submit">update</button>
    </form>
</body>
</html>
