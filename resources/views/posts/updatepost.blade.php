<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page_Design</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/update_post.css') }}" rel="stylesheet">
</head>
<body>
    {{-- update-post  --}}
    <div class="container">
        <form action="">
            <div class="row first">
                <h3>Update Post</h3>
            </div>
            <div class="row second">
                <div class="col-md-2">
                    <label for="">Title</label>
                </div>
                <div class="col-md-10">
                    <input class="input-title" type="text" name="" id="">
                </div>
            </div>
            <div class="row third">
                <div class="col-md-2">
                    <label for="">Description</label>
                </div>
                <div class="col-md-10">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
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
</body>
</html>
