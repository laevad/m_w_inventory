<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    css external-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap files/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}

    <title>{{ $data['title'] }}</title>

</head>
<body style="background-color: #1A4B10;font-family: 'Comic Sans MS', sans-serif;">
<nav class="navbar font-weight-bold">
    <a class="mx-auto text-decoration-none" id="title" href="{{ route('admin.dashboard') }}" style="color: #d6ead2;">M & W Inventory</a>
</nav>
<div class="container" >
    <nav class="navbar menu-al ">
        <p class="mb-1 btn btn-warning text-center col-md-2 disabled" href="" >User: {{ $data['loggedAdminUserInfo']['name'] }}</p>
        <p  class="mb-1 text-center  mx-auto col-md-8"  href="" style="font-weight: bold; font-size: 26px;color: #d6ead2;">{{ $data['title'] }}</p>
        <a type="button" class="mb-1 btn btn-outline-warning text-center col-md-2 "  href="{{ route('auth.logout') }}">
            Logout</a>
    </nav>