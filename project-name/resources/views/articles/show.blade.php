@extends('layout')
@section('title','show')
@section('body')
<div class="container w-50 my-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
             {{$article->titre}} 
             <a href="{{url('article')}}" class="btn btn-dark ">back</a>
        </div>
        <div class="card-body">
            {{$article->contenu}}
        </div>
        <div class="card-footer">
            commentaires:
            <ul class="list-group">
                @foreach ($article->commentaire as $com)
                    <li class="list-group-item d-flex justify-content-between">
                        <span>{{ $com->contenu_c }}</span> {{ $com->date_pub_c }}
                    </li>
                @endforeach
            </ul>
        </div>
        <h5>Ajouter commentaire</h5>

        <a href="{{url('com/create/'.$article->id)}}" class="btn btn-primary w-30">Ajouter</a>

    </div>
</div>
@endsection