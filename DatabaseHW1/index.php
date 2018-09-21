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
<div id="ActualHeader">
 <nav class="navbar navbar-expand-lg navbar-default bg-dark">
    <a class="navbar-brand" href="#">Student Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="AddStudent.php">Add Student <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
</div>
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
     <div class="form-group row">
         <div class="col-sm-10">
             <button type="submit" class="btn btn-primary"> Save </button>
         </div>
     </div>
</form>
</div>

</body>

</html>
