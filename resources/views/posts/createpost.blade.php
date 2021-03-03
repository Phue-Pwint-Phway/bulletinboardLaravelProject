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
        {{-- create-post  --}}
        <div class="container">
            <form action="{{ url('/importpost') }}" method="GET" id="form1">
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
    </body>
</html>

