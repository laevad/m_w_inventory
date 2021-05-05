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
                <a type="button" class="mr-1 btn" href="{{ route('admin.add') }}" style="background-color: #42c12a; border-radius: 20px"><img src="{{ asset('img/control_point.svg') }}" alt="" width="25"></a>
                <a type="button" class="mr-auto btn" href="{{ route('admin.update')  }}" style="background-color: #42c12a; border-radius: 20px"><img src="{{ asset('img/edit.svg') }}" alt="" width="25"></a>
            </form>
        </div>
    </nav>
    <div class="w-auto mx-auto mt-2 mb-5 menu-al ">
        <table class="table  table-responsive-sm ">
            <thead class="text-white" style="" >
            <tr>
                <th width="10%">#</th>
                <th width="40%">Name</th>
                <th width="30%">Price</th>
                <th width="20%">Quantity</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr class=" text-light" >
                <td>{{ $product->id }}</td>
                <td> {{ $product->name }} </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
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