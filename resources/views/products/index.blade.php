{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Opertation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Operation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-6xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold text-center mb-6">Product Management</h1>

        <!-- Success Message -->
        @if(session()->has('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create Product Button -->
        <div class="mb-4">
            <a href="{{ route('product.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow text-sm inline-block">
                Create a Product
            </a>
        </div>

        <!-- Product Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full text-sm text-left border border-gray-200">
                <thead class="bg-gray-800 text-white uppercase">
                    <tr>
                        <th class="px-4 py-3 border">ID</th>
                        <th class="px-4 py-3 border">Name</th>
                        <th class="px-4 py-3 border">Qty</th>
                        <th class="px-4 py-3 border">Price</th>
                        <th class="px-4 py-3 border">Description</th>
                        <th class="px-4 py-3 border">Edit</th>
                        <th class="px-4 py-3 border">Delete</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $product->id }}</td>
                            <td class="px-4 py-2 border">{{ $product->name }}</td>
                            <td class="px-4 py-2 border">{{ $product->qty }}</td>
                            <td class="px-4 py-2 border">{{ $product->price }}</td>
                            <td class="px-4 py-2 border">{{ $product->description }}</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route('product.edit', ['product' => $product]) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs">
                                    Edit
                                </a>
                            </td>
                            <td class="px-4 py-2 border">
                                <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>