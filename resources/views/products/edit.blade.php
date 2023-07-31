@extends("layouts.app");

@section("content")
    <h1>Edit product</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @endif
    <form action="{{ route('products.update',['product'=>$product]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <div>
                <label>Name</label>
                <input class="form-control" type="text" name="name" placeholder="Product name" value="{{ $product->name }}">
            </div>
            <div>
                <label>Category</label>
                <input class="form-control" type="text" name="category" placeholder="Category name" value="{{ $product->category }}">
            </div>
            <div>
                <label>Description</label>
                <input class="form-control" type="text" name="description" placeholder="Description" value="{{ $product->description }}">
            </div>
            <div>
                <label>Price</label>
                <input class="form-control" type="text" name="price" placeholder="Price" value="{{ $product->price }}">
            </div>
            <div>
                <label>Owner</label>
                <input class="form-control" type="text" name="owner" placeholder="Owner name" value="{{ $product->owner }}">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </div>
    </form>

@endsection
