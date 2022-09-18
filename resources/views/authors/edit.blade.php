
@extends('layouts.app')

@section('content')
<br></br>
<div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Aurthor') }}
                </div>

                <div class="card-body">
                   
                   
               <form action="{{ route('authors.update',[$author]) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $author->name }}">
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
        </div>
</div>
@endsection