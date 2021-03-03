<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page_Design</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/uploadCSV.css') }}" rel="stylesheet">
</head>
<body>
    {{-- upload-CSV --}}
        <div class="container">
            <h3>Upload CSV</h3>
            <div class="container">
                <div class="row one">
                    <p>Import File Form</p>
                </div>
                <div class="row two">
                    <input type="file" name="" id="" accept="file" onchange="loadFile(event)">
                    <button>Import File</button>
                </div>
            </div>
        </div>
</body>
</html>
