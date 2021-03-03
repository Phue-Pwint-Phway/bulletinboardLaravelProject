<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page_Design</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/update_user.css') }}" rel="stylesheet">
</head>
<body>
    {{-- edit-profile --}}
    <div class="container">
        <div class="row">
            <div class="col-md1-10">
                <form action="">
                    <div class="row one">
                        <h3>Edit User</h3>
                    </div>
                    <div class="row two">
                        <div class="col-md-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" id="">
                        </div>
                    </div>
                    <div class="row three">
                        <div class="col-md-3">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="email" id="">
                        </div>
                    </div>
                    <div class="row four">
                        <div class="col-md-3">
                            <label for="type">Type</label>
                        </div>
                        <div class="col-md-9">
                            <select id="inputState" class="type-option">
                                <option selected> </option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="row five">
                        <div class="col-md-3">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="phone" id="">
                        </div>
                    </div>
                    <div class="row six">
                        <div class="col-md-3">
                            <label for="dateofbirth">Date of Birth</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" id="start" name="trip-start" value="bday">
                        </div>
                    </div>
                    <div class="row seven">
                        <div class="col-md-3">
                            <label for="address">Address</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="address" id="">
                        </div>
                    </div>
                    <div class="row eight">
                        <div class="col-md-3">
                            <label for="profile">Profile</label>
                        </div>
                        <div class="col-md-9">
                            <input type="file" accept="image/*" onchange="loadFile(event)">
                        </div>
                    </div>
                    <div class="row nine">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <img id="output"/>
                        </div>
                    </div>
                    <div class="row ten">
                        <div class="col-md-3">
                            <a href="../update_user/password_change.html">Change Password</a>
                        </div>
                        <div class="col-md-9"></div>
                    </div>
                    <div class="row eleven">
                        <button type="button" class="confirm" onclick="updateUserConfirmFunction()">Edit
                        </button>
                        <button class="clear">Clear</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
</body>
</html>
