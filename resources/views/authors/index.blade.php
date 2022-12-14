
@extends('layouts.app')

@section('content')
<br>
<div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Authors') }}
                </div>

                <div class="card-body">
                   <a href="{{route('authors.create') }}" class="btn btn-primary">Create New Author</a>
                   
                <div class="mt-3">

                    <h3>List of Authors:</h3>
                    <br>
                    <ul class="list-group">
                    @forelse ($authors as $author)
                    <li class="List-group-item">
                        {{ $author->name }}     
                        <span class="float-right d-flex">
                            <a href="{{ route('authors.edit',[$author]) }}"
                            class="btn btn-warning btn-sm mr-2">Edit</a>
                            <form action="{{route('authors.destroy',[$author])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </span>
                    </li>
                    @empty
                    <li class="List-group-item">No Author added yet </li>
                    @endforelse
                    
                    </ul>
                </div>
            </div>
        </div>
        </div>
</div>
@endsection
