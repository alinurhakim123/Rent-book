@extends('layouts.main')

@section('title', 'user')
@section('content')
    <div class="container">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Addres</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>       
              <?php
                  $i=1;
              ?>
              @foreach($data as $dt)    
            <tr>          
              <th scope="row">{{$i++}}</th>
              <td>{{$dt->name}}</td>
              <td>{{$dt->email}}</td>
              <td>{{$dt->phone}}</td>
              <td>{{$dt->addres}}</td>           
              <td>
              <form action="{{route('delete', $dt->id)}}" method="POST">
                @csrf
                <a href="{{route('edit',$dt->id)}}" class="btn btn-primary">edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </td>           
            </tr> 
            @endforeach 
          </tbody>
        </table>
    </div>
@endsection