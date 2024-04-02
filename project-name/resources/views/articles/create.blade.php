@extends('layout')
@section('title','create')
@section('body')

<div class="container w-50 my-5">
    <a href="{{url('article')}}" class="btn btn-dark">Back</a>

    <form action = " {{url('article')}} " method="POST" enctype="multipart/form-data">

        @csrf

        <input type="text"name="titre"placeholder="enter titre"class='form-control my-3'>
        <input type="text"name="contenu"placeholder="enter contenu"class='form-control my-3'>
        <input type="date"name="date_pub"class='form-control my-3'>
        <input type="file"name="picture"class='form-control my-3'>
        <button class="btn btn-success">save</button>
        <button type="reset" class="btn btn-secondary">cancel</button>
    </form>
    
</div>

@endsection