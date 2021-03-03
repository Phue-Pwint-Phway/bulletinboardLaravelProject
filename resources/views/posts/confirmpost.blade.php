<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page_Design</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/create_post.css') }}" rel="stylesheet">
</head>
<body>
    {{-- create-post-confirm  --}}
    <div class="container">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="row first">
                <h3>Create Post Confirmation</h3>
            </div>
            <div class="row second">
                <div class="col-md-2">
                    <label for="">Title</label>
                </div>
                <div class="col-md-10">
                    <label for="title">{{ $titel }}</label>
                </div>
            </div>
            <div class="row third">
                <div class="col-md-2">
                    <label for="">Description</label>
                </div>
                <div class="col-md-10">
                    <label for="description">{{ $description }}</label>
                </div>
            </div>
            <div class="row fouth">
                <button type="submit" class="create" onclick="createPostCreateFunction()">Create</button>
                <button type="menu" class="cancel" onclick="location.href='{{ url('/cancelcreatepost') }}'">Cancel</button>
            </div>

        </form>
    </div>
</body>
</html>
