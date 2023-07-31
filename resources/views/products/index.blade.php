@extends("layouts.app")

@section("content")

<div class="container-fluid">

    {{ $products->links() }}

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
    @endif
    <div class="row g-0">
        <nav class="col-2 pe-3" style="background-color: lightblue;height: 100%vh;position: relative">
            <div class="h4 py-3 text-center d-flex" style="display: flex;align-items:center">
                <div class="p-2 me-2 ms-3" style="background-color: blue;
                border-radius: 5px;font-size: 15px;line-height: 13px;color: #fff">LO <div>GO</div> </div>
                <span class="d-none d-lg-inline">
                    Admin Panel
                </span>
            </div>
            <div class="list-group text-center text-lg-start">
                <a href="#" class="ms-2 list-group-item list-group-item-action" style="background-color: lightblue">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <span class="d-none d-lg-inline">Items</span>
                </a>
                <a href="#" class="ms-2 list-group-item list-group-item-action" style="background-color: lightblue">
                    <i class="fa-solid fa-list"></i>
                    <span class="d-none d-lg-inline">Category</span>
                </a>
            </div>
            <a href="" style="margin-left: 20px;position:absolute;bottom: 50px;">
                <i style="padding-right: 10px" class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
        </nav>
        <main class="col-10 g-2">
            <form action="{{ url('/products/create') }}" method="get">
                @csrf
                <button class="btn btn-success float-end mb-4">+ Add Item</button>
            </form>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->owner }}</td>
                            <td class="d-flex">
                                <form method="post" action="{{ route('products.edit',['product'=>$product]) }}" >
                                    @csrf
                                    @method('get')
                                    <button class="btn btn-sm btn-success me-3" type="submit"><i class="fa-solid fa-pencil"></i></button>
                                </form>
                                {{-- <a href="{{ route('products.edit',['product'=>$product]) }}" class="me-5"><i class="fa-solid fa-pencil"></i></a> --}}
                                <form method="post" action="{{ route('products.delete',['product'=>$product]) }}" >
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</div>

@endsection
