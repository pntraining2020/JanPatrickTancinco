<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/homeLayout.css" >
</head>
<body class="container">
    <br>
    <div class="w-75">
        <h2>Time tracker App</h2>
        <div class="card">
            <div class="card-body w-25">
                <select class="mdb-select md-form" id="select" onchange="selectFunction()">
                    @foreach($users as $user)
                        <option value="{{ $user->name }}" id="names">{{ $user->name }}</option>
                    @endforeach
                </select>
                <label>CurrentTime: <span id="CurrentTime" ></span></label>
                <br>
                <button class="btn btn-primary" id="clockIn" >Clock in</button>&nbsp;
                <b class="inline" id="inTime"></b>
                <br>
                <br>
                <div class="border border-secondary">
                    <h5>Break:</h5>
                    <div>&nbsp;&nbsp;
                        <button class="btn btn-primary" id="clockStart" >Start</button>&nbsp;
                        <b class="inline"></b>
                    </div>
                    <br>
                    <div>&nbsp;&nbsp;
                        <button class="btn btn-primary" id="clockEnd" >End</button>&nbsp;
                        <b class="inline"></b>
                    </div>
                    <br>
                </div>
                <div>
                    <br>
                    <button class='btn btn-primary' id="clockOut" >Clock Out: </button>
                </div>
                <h6>Total time worked: </h6>
                <b class="inline"></b>
                <br>
                <br>
                <h6>Hours Left before timeout: </h6><b class="inline"></b>
                <br>
                <br>
                <h6>Total breaks used: </h6><b class="inline"></b>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/script.js"></script>
<script>
var today = new Date();
document.getElementById('CurrentTime').innerHTML = time;
</script>
</html>