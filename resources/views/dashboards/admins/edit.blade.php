


@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','edit')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>edit role for registered user</h3>
                </div>
                <div class="card body">
                   <div class="class col-md-6">
                    <form action="{{ route('admin.update',$users->id) }}"  method="POST">
                        {{-- "{{ url('admin.update'.$users->id) }}" --}}
                        @csrf
                        @method('PUT')
                        {{-- <form action="/role-update/{{ $users->id }}" method="POST"> --}}
                        <div class="form-group">
                            <label > Name</label>
                            <input type="text" name="username"  value="{{ $users->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Give role</label>
                            <select name="usertype"  class="form-control">
                                <option value="admin">Admin</option>
                                <option value="lecturer">Lecturer</option>
                                <option value="user">user</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        
                        <a href="{{ route('admin.settings')}}" class="btn btn-danger"> Cancel</a>

                    </form>


                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    

 
@endsection