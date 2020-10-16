@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Add New Post</h2>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-form-label">Post Caption</label>
                    <input type="text" id="caption"  name="caption" class="form-control @error('caption') is-invalid @enderror"  value="{{ old('caption') }}" required autocomplete="caption" autofocus>
    
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-form-label">Post Image</label>
                    <input type="file" id="image" name="image" class="form-control-file" required>
        
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary" type="submit">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
