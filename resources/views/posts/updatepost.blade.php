@extends('layout')
@section('content')
    {{-- update-post  --}}
    <div class="container">
        <form action="{{ route('posts.update',$post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row first">
                <h3>Update Post</h3>
            </div>
            <div class="row second">
                <div class="col-md-2">
                    <label for="">Title</label>
                </div>
                <div class="col-md-10">
                    <input class="input-title" type="text" name="title" id="" value="{{ $post->title }}" placeholder="Enter Title">
                </div>
            </div>
            <div class="row third">
                <div class="col-md-2">
                    <label for="">Description</label>
                </div>
                <div class="col-md-10">
                    <input class="input-description" type="text" name="description" value="{{ $post->description }}" style="height: 150px">
                    
                </div>
            </div>
            <div class="row fouth">
                <div class="col-md-2">
                    <label for="">Status</label>
                </div>
                <div class="col-md-10">
                    <input type="checkbox" name="form-check-input" id="flexSwitchCheckDefault">
                </div>
            </div>
            <div class="row fifth">
                <button class="confirm" onclick="updatePostConfirmFunction()">Confirm</button>
                <button class="clear">Clear</button>
            </div>
        </form>
    </div>
@endsection