<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Categories</title>
</head>
<body>
    <h1>All Categories</h1>
    <button onclick="window.location.href='{{ route('categories.create') }}'" id="defaultModalButton" class="text-blue-600 hover:bg-gray-200 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex gap-1" type="button">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        Add product
    </button>

    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3">Category name</th>
                <th scope="col" class="px-4 py-3">Slug</th>
                <th scope="col" class="px-4 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="border-b">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900">
                        {{ $category->name }}
                    </th>

                    <td class="px-4 py-3">
                        {{ $category->slug }}
                    </td>
                    <td class="px-4 py-3 flex flex-row">
                        <a href="{{route('categories.edit',$category->id)}}"><i class="fa-solid fa-pen-to-square"></i>                        </a>
                        <a href="{{route('categories.show',$category->id)}}"><i class="fa-solid fa-eye"></i></a>
                        <form action="{{route('categories.destroy',$category->id)}}"  method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:bg-gray-200 rounded-lg text-sm p-1.5">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach

            @if ($categories->isEmpty())
                <tr>
                    <td colspan="4" class="text-center py-4">
                        No categorys found.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
