<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/post_detail.css') }}" rel="stylesheet">
</head>
<body>
    {{-- post-detail --}}
    <div class="container">
        <form action="">
            <div class="row one">
                <h3>Post Detail</h3>
            </div>
            <div class="row two">
                <div class="col-md-3">
                    <label for="title">Post Title</label>
                </div>
                <div class="col-md-9">
                    <p>Title 1</p>
                </div>
            </div>
            <div class="row three">
                <div class="col-md-3">
                    <label for="description">Post Description</label>
                </div>
                <div class="col-md-9">
                    <p>Description 1</p>
                </div>
            </div>
            <div class="row four">
                <div class="col-md-3">
                    <label for="posted-use">Posted Use</label>
                </div>
                <div class="col-md-9">
                    <p>User 1</p>
                </div>
            </div>
            <div class="row five">
                <div class="col-md-3">
                    <label for="posted-date">Posted Date</label>
                </div>
                <div class="col-md-9">
                    <p>5/10/2020</p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
