@extends('layouts.login.login-layout')

@section('content')
<div class="global-container container">
    <div class="card login-form col-md-4" style="-webkit-box-shadow: 6px 2px 17px -3px rgba(115,115,115,0.74);background-color: #349721;"> <!-- I put some css here to override the bootstrap   -->
        <div class="card-body">
            <div class="card-text">
                <form class="firstForm" novalidate method="POST" action="{{ route('auth.check') }}">
                    @if(Session::get('fail'))
					<div class="alert alert-danger pop-error" style="text-align: center">
						{{ Session::get('fail') }}
					</div>
					@endif

					@csrf
                    <h3 class="card-title text-center mb-4">M & W Inventory</h3>
                    <div class="form-group">
                        <input type="text" id="email" name="email" placeholder="Username" class="form-control form-control-sm" value="{{ old('email') }}">
                        <span class="text-danger pop-error" style="color: white!important">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-sm mb-2">
                        <span class="text-danger pop-error" style="color: white!important">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-block btn-log" id="sign-in" >Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection