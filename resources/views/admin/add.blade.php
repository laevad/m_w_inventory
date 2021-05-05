@include('layouts.main.header-dashboard-layout')

<div class="container" >
    <nav class="navbar navbar-expand-lg row ">
        <div class=" navbar-collapse form-inline" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a type="button" class="mt-2 mb-2 btn" style="background-color: #42c12a; border-radius: 20px" href="{{ route('admin.dashboard') }}" ><img src="{{ asset('img/arrow_back.svg') }}" alt="" width="25"></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a type="button" class="mr-1 btn" href="{{ route('admin.view') }}" style="background-color: #42c12a; border-radius: 20px"><img src="{{ asset('img/remove_red_eye_black.svg') }}" alt="" width="25"></a>
                <a type="button" class="mr-auto btn" href="{{ route('admin.update') }}" style="background-color: #42c12a; border-radius: 20px"><img src="{{ asset('img/edit.svg') }}" alt="" width="25"></a>
            </form>
        </div>
    </nav>
    <div class="menu-al mt-2 mb-5 ">
        <form method="post" action="{{ route('admin.addProduct') }}" autocomplete="off">
            @csrf
            <div class="modal-body">
                <div class="form-group p-2">
                    <label for="name"  style="color: #d6ead2;">Product Name</label>
                    <input type="text" required class="form-control" id="name" name="name"  placeholder="e.g. Coke">
                </div>
                <div class="form-group p-2">
                    <label for="price"  style="color: #d6ead2;">Product Price</label>
                    <input type="text" required class="form-control" id="price" name="price"  placeholder="e.g. 9999.00">
                </div>

                <div class="form-group p-2">
                    <label for="quantity"  style="color: #d6ead2;">Product Quantity</label>
                    <input type="number" required class="form-control" id="quantity" name="quantity" placeholder="e.g. 99999">
                </div>
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-success w-75 p-2 mb-4" name="submit">Add Product</button>
            </div>
        </form>
    </div>
</div>

@include('layouts.main.footer-dashboard-layout')