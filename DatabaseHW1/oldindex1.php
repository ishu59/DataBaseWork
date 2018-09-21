<html>
<head>
    <script src="./Scripts/js/jquery.min.js"></script>
    <script src="Scripts/js/popper.min.js"></script>
    <script src="./Scripts/js/bootstrap.js"></script>
    <script src="./Scripts/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="./Scripts/css/bootstrap.css"></link>
    <link rel="stylesheet" href="./Scripts/css/bootstrap-grid.css"></link>
    <link rel="stylesheet" href="./Scripts/css/bootstrap-reboot.css"></link>
    <link rel="stylesheet" href="Scripts/css/bootstrap-theme.min.css"></link>
</head>
<body>
<!-- As a link -->
<nav class="navbar navbar-default">
    <a class="navbar-brand  mb-0 h1" href="#">Student Management System</a>
</nav>

<div>
    <br/>
</div>
<div class="col-md-6">
    <form>
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Id </label>
            <div  class="col-sm-10">
                <input type="text" class="form-control" id="id" placeholder="Student ID">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name </label>
            <div  class="col-sm-10">
                <input type="text" class="form-control" id="Name" placeholder="Student Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="dept" class="col-sm-2 col-form-label">Department </label>
            <div  class="col-sm-10">
                <input type="text" class="form-control" id="dept" placeholder="Department">
            </div>
        </div>
        <div class="form-group row">
            <label for="credit" class="col-sm-2 col-form-label">Credit </label>
            <div  class="col-sm-10">
                <input type="text" class="form-control" id="credit" placeholder="Credit">
            </div>
        </div>

    </form>
</div>
<div class="container">
    <div class="container col-md-6 form-group">

        <div class="row form-control">
            <div class="col">
                <label for="id">Student Id : </label>
            </div>
            <div class="col ">
                <input name="id" id='id' type="text">
            </div>
        </div>
        <div class="row form-control">
            <div class="col">
                <label for="id">Student Name :  </label>
            </div>
            <div class="col ">
                <input name="id" id='id' type="text">
            </div>
        </div>
        <div class="row form-control">
            <div class="col">
                <label for="id">Department : </label>
            </div>
            <div class="col ">
                <input name="id" id='id' type="text">
            </div>
        </div>
        <div class="row form-control">
            <div class="col">
                <label for="id">Credit : </label>
            </div>
            <div class="col ">
                <input name="id" id='id' type="text">
            </div>
        </div>
        <button type="submit" onclick="alert('hello');" value="Submit"></button>

    </div>
    <input type="button" class="btn btn-danger" value="Hello">
</div>

</body>

</html>
