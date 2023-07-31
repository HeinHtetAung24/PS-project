@extends("layouts.app")

@section("content")
    {{-- <div class="row">
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
            <a href="" style="margin-left: 50px;position:absolute;bottom: 50px;text-decoration: none">
                <i style="padding-right: 10px" class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
        </nav>
        <section class="col-5">
            <h4 class="h5 text-success">Add Items</h4>
            <h5 class="h6 mb-3">Items Information</h5>
            <form action="{{ url("/products/save") }}" method="post">
                @csrf
                <div class="form-group">
                    <div>
                        <label class="mb-2" style="font-weight: bold">Item Name</label>
                        <input class="form-control mb-4" type="text" name="name" required placeholder="Enter Item Name">
                    </div>
                    <div>
                        <label class="mb-2" style="font-weight: bold">Select Category</label>
                        <select class="form-select mb-4" aria-label="Default select example" name="category">
                            <option value="0">Phone</option>
                            <option value="1">Computer</option>
                            <option value="2">Services</option>
                            <option value="3">Property</option>
                            <option value="3">Service</option>
                            <option value="3">Fashion</option>
                          </select>
                        </div>
                    <div>
                        <label class="mb-2" style="font-weight: bold">Price</label>
                        <input class="form-control mb-4" type="text" name="price" placeholder="Enter Price">
                    </div>
                    <div>
                        <label class="mb-2" style="font-weight: bold">Description</label>
                        <textarea id="text-editor" class="form-control mb-4" type="text" name="description" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="mt-4">
                        <label class="mb-2" style="font-weight: bold">Select Item Condition</label>
                        <select class="form-select mb-4" aria-label="Default select example" name="category">
                            <option value="0">New</option>
                            <option value="1">Used</option>
                        </select>
                    </div>
                    <div>
                        <label class="mb-2" style="font-weight: bold">Select Item Type</label>
                        <select class="form-select mb-4" aria-label="Default select example" name="category">
                            <option value="0">Buy</option>
                            <option value="1">Sell</option>
                            <option value="1">Exchange</option>
                        </select>
                    </div>
                    <div>
                        <div style="font-weight: bold">Status</div>
                        <input type="checkbox"><span class="ms-2">Publish</span>
                    </div>
                </div>
            </form>
        </section>
        <section class="col-5">
            <div class="mt-4">
                <h5 class="h6 mb-3">Owner Information</h5>
                <div class="form=control">
                    <form action="{{url("/products/save")}}" method="POST">
                        <div>
                            <label class="mb-2" style="font-weight: bold">Owner Name</label>
                            <input class="form-control mb-4" type="text" name="name" placeholder="Enter Owner Name">
                        </div>
                        <div>
                            <label class="mb-2" style="font-weight: bold">Contact Number</label>
                            <input class="form-control mb-4" type="text" name="name" placeholder="Add Number">
                        </div>
                        <div>
                            <label class="mb-2" style="font-weight: bold">Contact Number</label>
                            <input class="form-control mb-4" type="text" name="name" placeholder="Add Number">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <button type="submit" class="btn btn-md btn-primary float-end me-5 mb-3">Save</button> --}}

    <form action="{{ url("/products/save") }}" method="post">
        @csrf
        <div class="form-group">
            <h2>Add Product</h2>
            <div>
                <label>Name</label>
                <input class="form-control form-control-md" type="text" name="name" placeholder="Product name">
            </div>
            <div>
                <label>Category</label>
                <input class="form-control form-control-md" type="text" name="category" placeholder="Category name">
            </div>
            <div>
                <label>Description</label>
                <input class="form-control form-control-md" type="text" name="description" placeholder="Description">
            </div>
            <div>
                <label>Price</label>
                <input class="form-control form-control-md" type="text" name="price" placeholder="Price">
            </div>
            <div>
                <label>Owner</label>
                <input class="form-control form-control-md" type="text" name="owner" placeholder="Owner name">
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
        </div>
    </form>
@endsection

@section("scripts")
<script>
    ClassicEditor
        .create( document.querySelector( '#text-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
