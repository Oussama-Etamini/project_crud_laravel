@extends('layout')
@section('title','show')
@section('body')        
    <div  class="container my-5 w-50">
        <form action="{{url('com/store/'.$article->id )}}" method="POST">
            @csrf
            <select name="article_id" id="" class="form-select my-3">
                <option value="{{$article->id}}">{{$article->titre}}</option>
            </select>
            <textarea name="contenu_c" id="" cols="30" rows="3" class="form-control my-3"></textarea>
            <button class="btn btn-success">Ajouter</button>
            <a href="{{url('article/'.$article->id)}}" class="btn btn-dark ">back</a>

        </form>
    </div>
@endsection