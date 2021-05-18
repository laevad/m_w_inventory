@include('layouts.main.header-dashboard-layout')


<div class="container" >
    <nav class="navbar navbar-expand-lg row ">
        <div class="navbar-collapse form-inline" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a type="button" class="mt-2 mb-2 btn" style="background-color: #42c12a; border-radius: 20px" href="{{ route('admin.update') }}" ><img src="{{ asset('img/arrow_back.svg') }}" alt="" width="25"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="menu-al mt-2 mb-5 ">
        <form method="post" action="{{ route('admin.saveEditProduct') }}" autocomplete="off">
            @csrf
            <input type="hidden" name="cid" value="{{ $product['id'] }}">
            <div class="modal-body">
                <div class="form-group p-2">
                    <label for="name"  style="color: #d6ead2;">Product Name</label>
                    <input class="form-control" id="name" name="name"  value="{{ $product['name'] }}">
                    <span class="pop-error" style="color: yellow!important">@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group p-2">
                    <label for="price"  style="color: #d6ead2;">Product Price</label>
                    <input class="form-control" id="price"  value="{{ $product['price'] }}" name="price">
                    <span class="pop-error" style="color: yellow!important">@error('price'){{ $message }} @enderror</span>
                </div>

                <div class="form-group p-2">
                    <label for="quantity"  style="color: #d6ead2;">Product Quantity</label>
                    <input class="form-control" id="quantity" name="quantity"  value="{{ $product['quantity'] }}">
                    <span class="pop-error" style="color: yellow!important">@error('quantity'){{ $message }} @enderror</span>
                </div>
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-success w-75 p-2 mb-4" name="submit">Edit Product</button>
            </div>
        </form>
    </div>
    
</div>

@include('layouts.main.footer-dashboard-layout')