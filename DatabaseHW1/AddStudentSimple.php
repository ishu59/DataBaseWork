<html>
<head>

</head>
<body>
<title > Add Student</title>
<div>
    <br/>
    <form action="AddStudentSimple.php" method="post">
    <div>
        <input type="number" id="ID"/>
        <br/>
        <input type="text" id="name"/>
        <br/>
        <input type="text" id="dept"/>
        <br/>
        <input type="number" id="credit"/>
        <br/>
        <button type="submit">Save</button>



    </div>
    </form>
</div>
</body>
<?php
$name = $_POST["name"];
$id = $_POST["id"];
$dept = $_POST["dept"];
$credit = $_POST["credit"];
echo $name;
echo $id;
echo $dept;
echo $credit;


?>




</html>