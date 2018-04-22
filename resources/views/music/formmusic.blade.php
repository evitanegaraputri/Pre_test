@extends('layouts.app')

@section('title','Music')

@section('page-title','Tambah Lagu')
@section('dashboard-content')

<form action="{{route('music.store')}}" method="post">
@CSRF
<div class="form-group">
        <label class="col-form-label" for="inputDefault">Title</label>
        <input type="text" class="form-control" placeholder="Title" id="inputDefault" name="title">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Genre</label>
        <input type="text" class="form-control" placeholder="Genre lagu" id="inputDefault" name="genre">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Singer</label>
        <input type="text" class="form-control" placeholder="Singer" id="inputDefault" name="singer">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Song Writer</label>
        <input type="text" class="form-control" placeholder="song writer" id="inputDefault" name="song_writer">
    </div>
    
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
   
@endsection