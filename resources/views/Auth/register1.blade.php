{{-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rents-Books</title>
</head>

<body style="background-image: linear-gradient(to right, #645CBB, #A084DC, #BFACE2)">
    <div class="card-body px-2">
        <h3 class="card-heading text-center"> Register </h3>
    </div>
    <div class="container">
        <div class="content-4">
        <form action="{{route('storeRegister')}}" method="POST">
            @csrf
            <div class="mb-3">
                  <h1 class="h3 mb-3 fw-normal">Register</h1>
                    <label for="exampleInputEmail1" class="form-label">Nama:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Input your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="input your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="password" name="password"
                    placeholder="input your password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="+62...">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Address:</label>
                <input type="text" class="form-control" id="address" name="addres" placeholder="address...">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    </div>
    </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="vh-100 bg-image"
style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-4  col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

            <form action="{{route('storeRegister')}}" method="POST">
                @csrf
              <div class="form-outline mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Input your name">
              </div>

              <div class="form-outline mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="input your email">
              </div>

              <div class="form-outline mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="password" name="password"
                    placeholder="input your password">
              </div>

              <div class="form-outline mb-3">
                <label for="password" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="+62...">
              </div>

              <div class="form-outline mb-3">
                <label for="password" class="form-label">Address:</label>
                <input type="text" class="form-control" id="address" name="addres" placeholder="address...">
              </div>

              <button type="submit" class="btn btn-primary">Register</button>

              <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                  class="fw-bold text-body"><u>Login here</u></a></p>

            </form>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>