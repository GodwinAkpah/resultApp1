@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','settings')
@section('content')
<div class="card-body">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif

  {{ __('You are logged in!') }}
</div>
<table class="table">
  <div>Registered Users</div>
    <thead class="thead-dark">
      
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Role</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      
    </thead>
    <tbody>
      @foreach ($users as  $row)
        
            <tr>
              {{-- <th>1</th> --}}
              <td> {{ $row->id}}</td>
              <td> {{ $row->name}}</td>
              <td>{{ $row->email }}</td>
              
              <td>{{ $row->phone }}</td>
              <td>{{ $row->role }}</td>
              

              
              <td>
                  <a href="{{ route('admin.edit',$row->id) }}" class="btn btn-success">Edit</a>
                  {{-- <a href="{{ route('admin.edit') }}" class="btn btn-success">Edit</a> --}}
                  
                  {{-- "{{url('role-edit/.{{ $row->id }}') }}""  correct way of writting href routes--}}

                  {{-- <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
              </td>
              <td>
                  <a href="#" class="btn btn-danger">Delete</a>
              </td>

            </tr>
      @endforeach




      {{-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody> --}}
  </table>
  
 
@endsection