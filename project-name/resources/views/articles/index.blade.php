@extends('layout')
@section('title', 'index')
@section('body')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>List articles</h1>

            <form action="{{ url('search') }}" method='POST' class="d-flex w-25 ">
                @csrf
                <input type="text" name="search" class="form-control mx-2">
                <button class="btn btn-success">search</button>
            </form>

            <a href="{{ url('article/create') }}" class="btn btn-success">Create</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Picture</th>
                <th>Title</th>
                <th>Contenu</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            @foreach ($articles as $item)
                <tr>
                    <td><img src="{{ $item->picture }}" alt="" class="rounded-circle" width="55px" height="55px">
                    </td>
                    <td>{{ $item->titre }}</td>
                    <td>{{ $item->contenu }}</td>
                    <td>{{ $item->date_pub }}</td>

                    <td class="d-flex justify-content-center pt-3">
                        <a href="{{ url('article/' . $item->id . '/edit') }}" class="btn btn-warning btn-sm mx-1"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ url('article/' . $item->id) }}" method='POST' class="btn btn-info btn-sm mx-1"><i
                                class="fa-solid fa-eye"></i></a>
                        <form action="{{ url('article/' . $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mx-1"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
