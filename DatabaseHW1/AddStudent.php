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
<title>Add Student</title>
<div id="ActualHeader">
    <nav class="navbar navbar-expand-lg navbar-default bg-dark">
        <a class="navbar-brand" href="#">Student Management System</a>

    </nav>
</div>
<div>
    <br/>
</div>
<div class="col-md-6">
    <form name="studentForm" action="AddStudent.php" method="post">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Id </label>
            <div  class="col-sm-10">
                <input type="text" required class="form-control" id="id" placeholder="Student ID">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name </label>
            <div  class="col-sm-10">
                <input type="text" required class="form-control" id="Name" placeholder="Student Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="dept" class="col-sm-2 col-form-label">Department </label>
            <div  class="col-sm-10">
                <input type="text" required class="form-control" id="dept" placeholder="Department">
            </div>
        </div>
        <div class="form-group row">
            <label for="credit" class="col-sm-2 col-form-label">Credit </label>
            <div  class="col-sm-10">
                <input type="text" required class="form-control" id="credit" placeholder="Credit">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" id="save"   class="btn btn-primary"> Save </button>
            </div>
        </div>
    </form>
</div>
<?php

$name = $_POST["name"];
$id = $_POST["id"];
$dept = $_POST["dept"];
$credit = $_POST["credit"];
echo $name;
echo $id;
echo $dept;
echo $credit;

if (!is_int($id) || !is_numeric($credit) || $name == "" || $dept == "")
{
    die("Please provide valid inputs.");
}
// Generate sql
$sql = "select ".$select." from ".$from;
if (trim($where) != "" )
{
    $sql = $sql." where ".$where;
}
$sql = "INSERT INTO student (ID, name, dept_name, tot_cred)  VALUES (:id,:name,:dept,:credit)";

echo "<p><font color=\"red\">".$sql."</font></p>";


// Create connection
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "lab";
$option = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

$connection = new PDO("mysql:host=$servername;dbname=$database",$username,$password,$option);

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<p><font color=\"red\">Connected successfully</font></p>";

// Run a sql
$chkIfIdExistQuery = "SELECT * FROM  `student`  WHERE `ID`= :id ";
$ifExist = $conn->query($chkIfIdExistQuery);
if(mysqli_num_rows($ifExist)){
    $result  = $conn->query($sql);
    //if($result){
        die("Student data Saved!!");
    //}
}else{
    die("Id already exists.");
}


$result->free();

// Close connection
mysqli_close($conn);
?>
<!--<script>
    jQuery(function () {
        alert('Hello world');
    })();
</script>-->
<script>
    (function() {
        //alert('hello');
        $('form > input').keyup(function() {

            var empty = false;
            $('form > input').each(function() {
                console.log((this));
                if ($(this).val() == '') {
                    empty = true;
                }
            });

            if (empty) {
                $('#save').attr('disabled', 'disabled');
            } else {
                $('#save').removeAttr('disabled');
            }
        });
    })()
</script>
</body>

</html>
