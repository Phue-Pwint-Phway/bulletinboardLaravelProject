<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('/js/login.js') }}"></script> --}}
</head>
<body>
    <div class="container">
        <form class="" id="form-id" name="loginform" action="{{ route('') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-header">
                <h2 >SCM Bulletion Board</h2>
            </div>
            <div class="form-body">
                <div class="row one">
                    <div class="col-md-3"><h3>Login Form</h3></div>
                    <div class="col-md-9"></div>
                </div>
                <div class="row two">
                    <div class="col-md-3">
                        <label class="label_email" for="email" type="text">Email</label>
                    </div>
                    <div class="col-md-9">
                        <input id="email" class="input_email" type="email" name="email" placeholder="admin@gmail.com">
                    </div>
                </div>
                <div class="row three">
                    <div class="col-md-3">
                        <label class="label_password" for="password">Password</label>
                    </div>
                    <div class="col-md-9">
                        <input id="password" class="input_password" type="password" name="password" placeholder="admin123" id="">
                    </div>
                </div>
                <div class="row four">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <label for="">
                            <input type="checkbox" checked="checked" name="remenber">Remenber Me
                        </label>
                    </div>
                </div>
                <div class="row five">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"><span class="psw"><a href="htttp://">forget password?</a></span></div>
                </div>
                <div class="row six">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <button class="login" name="login" type="submit" onclick="login(this)">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
