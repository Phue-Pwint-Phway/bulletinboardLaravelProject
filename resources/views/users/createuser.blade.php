<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page_Design</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/create_user.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="{{ url('/importuser') }}">
            <div class="row one">
                <h3>Create User</h3>
            </div>
            <div class="row two">
                <div class="col-md-2">
                    <label for="name">Name</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="name" id="">
                </div>
            </div>
            <div class="row three">
                <div class="col-md-2">
                    <label for="email">Email Address</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="email" id="">
                </div>
            </div>
            <div class="row four">
                <div class="col-md-2">
                    <label for="password">Password</label>
                </div>
                <div class="col-md-10">
                    <input type="password" name="password" id="">
                </div>
            </div>
            <div class="row five">
                <div class="col-md-2">
                    <label for="confirmpassword">Confirm Password</label>
                </div>
                <div class="col-md-10">
                    <input type="password" name="confirmpassword" id="">
                </div>
            </div>
            <div class="row sixth">
                <div class="col-md-2">
                    <label for="type">Type</label>
                </div>
                <div class="col-md-10">
                    <select id="inputState" class="type-option">
                        <option selected> </option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>
            <div class="row seven">
                <div class="col-md-2">
                    <label for="phone">Phone</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="phone" id="">
                </div>
            </div>
            <div class="row eight">
                <div class="col-md-2">
                    <label for="dateofbirth">Date of Birth</label>
                </div>
                <div class="col-md-10">
                    <input type="date" id="start" name="trip-start" value="bday">
                </div>
            </div>
            <div class="row nine">
                <div class="col-md-2">
                    <label for="address">Address</label>
                </div>
                <div class="col-md-10">
                    <textarea name="address" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row ten">
                <div class="col-md-2">
                    <label for="profile">Profile</label>
                </div>
                <div class="col-md-10">
                    <input type="file" accept="image/*" onchange="loadFile(event)">
                </div>
            </div>
            <div class="row eleven">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <img id="output"/>
                </div>
            </div>
            <div class="row twelve">
                <button type="submit" class="confirm" onclick="createUserConfirmFunction()">Confirm</button>
                <button type="reset" class="clear">Clear</button>
            </div>
        </form>
    </div>

</body>
</html>
