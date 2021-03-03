<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page_Design</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/user_detail.css') }}" rel="stylesheet">
</head>
<body>
    {{-- profile --}}
    <div class="container">
        <form action="">
            <div class="row one">
                <div class="col-md-3">
                    <h3>User Profile</h3>
                </div>
                <div class="col-md-9">
                    <a href="../update_user/update_user.html">Edit</a>
                </div>
            </div>
            <div class="row two">
                <div class="col-md-2">
                    <label for="name">Name</label>
                </div>
                <div class="col-md-10">
                    <img id="output"/>
                </div>
            </div>
            <div class="row three">
                <div class="col-md-2">
                    <label for="email">Email Address</label>
                </div>
                <div class="col-md-10"></div>
            </div>
            <div class="row four">
                <div class="col-md-2">
                    <label for="type">Type</label>
                </div>
                <div class="col-md-10"></div>
            </div>
            <div class="row five">
                <div class="col-md-2">
                    <label for="phone">Phone</label>
                </div>
                <div class="col-md-10"></div>
            </div>
            <div class="row six">
                <div class="col-md-2">
                    <label for="dateofbirth">Date of Birth</label>
                </div>
                <div class="col-md-10"></div>
            </div>
            <div class="row seven">
                <div class="col-md-2">
                    <label for="address">Address</label>
                </div>
                <div class="col-md-10"></div>
            </div>
        </form>
    </div>
</body>
</html>
