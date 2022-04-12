@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','upload result')
@section('content')
 

<form action="{{ route('admin.importFunc') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="file" name="import_file" />
    <br>
    <button type="submit">import</button>



</form>
@endsection