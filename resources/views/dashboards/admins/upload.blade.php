@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','upload result')
@section('content')

@if (count($errors) > 0) 
<div class="alert alert-danger" role="alert">
   <strong>Errors:</strong>
   
   <ul>
      @foreach ($errors as $h)
         
         @foreach ($h->errors() as $error)
             <li>{{ $error }}</li>
         @endforeach
      @endforeach
   </ul>
</div>
@endif


<form action="{{ route('admin.importFunc') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="file" name="import_file" />
    <br>
    <button type="submit">import</button>

 

</form>

@endsection