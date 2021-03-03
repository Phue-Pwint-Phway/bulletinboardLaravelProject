@extends('layout')
@section('content')
    

        {{-- create-post  --}}
        <div class="container">
            <form action="{{ route('posts.store') }}" method="POST" id="form1">
                @csrf
                <div class="row first">
                    <h3>Create Post</h3>
                </div>
                <div class="row second">
                    <div class="col-md-2">
                        <label for="">Title</label>
                    </div>
                    <div class="col-md-10">
                        <input class="input-title" type="text" name="title" id="" value="" placeholder="Enter Title">
                        <label for="title">*</label>
                    </div>
                </div>
                <div class="row third">
                    <div class="col-md-2">
                        <label for="">Description</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="description" id="" cols="30" rows="10" placeholder="Enter Description"></textarea>
                        <label for="description">*</label>
                    </div>
                </div>
                <div class="row fouth">
                    <button type="submit" id="confirm-btn" class="confirm">Confirm</button>
                    <button type="reset" id="clear-btn" class="clear">Clear</button>
                </div>
            </form>
        </div>
@endsection    
