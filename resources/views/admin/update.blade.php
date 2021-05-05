@include('layouts.main.header-dashboard-layout')


<div class="container" >
    <nav class="navbar navbar-expand-lg row ">
        <div class="navbar-collapse form-inline" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a type="button" class="mt-2 mb-2 btn" style="background-color: #42c12a; border-radius: 20px" href="{{ route('admin.dashboard') }}" ><img src="{{ asset('img/arrow_back.svg') }}" alt="" width="25"></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a type="button" class="mr-1 btn" href="{{ route('admin.view') }}" style="background-color: #42c12a; border-radius: 20px"><img src="{{ asset('img/remove_red_eye_black.svg') }}" alt="" width="25"></a>
                <a type="button" class="mr-auto btn" href="{{ route('admin.add') }}" style="background-color: #42c12a; border-radius: 20px"><img src="{{ asset('img/control_point.svg') }}" alt="" width="25"></a>
            </form>
        </div>
    </nav>
    <div class="menu-al mt-2 mb-5 ">
        <table class="table  table-responsive-md " style="border: none">
            <thead class="text-white"  >
            <tr>
                <th width="8%">#</th>
                <th width="30%">Name</th>
                <th width="15%">Price</th>
                <th width="15%">Quantity</th>
                <th width="5%">&nbsp;</th>
                <th width="5%">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr class=" text-light" >
                <td class="table-pad">{{ $product->id }}</td>
                <td class="table-pad"> {{ $product->name }} </td>
                <td class="table-pad">{{ $product->price }}</td>
                <td class="table-pad">{{ $product->quantity }}</td>
                <td><a type="button" class="btn btn-sm w-100 text-white" href="/admin/editproduct/{{ $product->id }}" style="background-color: #632C7B" ><img src="{{ asset('img/border_color.svg') }}" alt="" width="20"></a></td>
                <td><a type="button" class="btn btn-danger btn-sm w-100" href="/admin/delete/{{ $product->id }}"><img src="{{ asset('img/delete_forever.svg') }}" alt="" width="15"></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div> 
    </div>
</div>



@include('layouts.main.footer-dashboard-layout')