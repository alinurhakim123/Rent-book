<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="main d-flex flex-column justify-content-beetwen">   
    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">Rent-Books</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    <!--Akhir Navbar-->


    <!--Content-->
    <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                
                <a href="/dashboard" @if(request()->route()->uri == 'dashboard') Class="active" @endif><i class="bi bi-house-door p-2"></i>Dashboard</a>
                <a href="/users"  @if(request()->route()->uri == 'user') Class="active" @endif><i class="bi bi-person p-2"></i>User</a>
                <a href="/book"  @if(request()->route()->uri == 'book') Class="active" @endif><i class="bi bi-book p-2"></i>Books</a>
                <a href="/category"  @if(request()->route()->uri == 'category') Class="active" @endif><i class="bi bi-tag p-2"></i>Category</a>
                <a href="rent-logs"  @if(request()->route()->uri == 'rent-logs') Class="active" @endif><i class="bi bi-bookmark p-2"></i>Rent-Logs</a>
                <a href="/"><i class="bi bi-box-arrow-left p-2"></i>Logout</a>
                
            </div>
            <div class="content col-lg-10 navbarSupportedContent">
                @yield ('content')
            </div>
        </div>
    </div>
    <!--Akhir Content-->


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>