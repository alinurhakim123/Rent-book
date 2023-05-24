@extends('layouts.main')
@section('title', 'Edit')
@section('content')
    <form action="{{route('updateindex',$data->id)}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="number" class="form-control" id="phone" maxlength="12" name="phone" value="{{$data->phone}}">
        </div>
        <div class="form-group">
          <label for="addres" class="form-label">Addres</label>
          <textarea name="addres" class="form-control" name="addres" id="addres" value="{{$data->addres}}"></textarea>
        </div>
        <div class="text-left">
          <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin Mau diubah?')">Submit</button>
        </div>       
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection