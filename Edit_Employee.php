<?php
include("conn.php");
$id=$_GET['edit'];
$sel=mysqli_query($conn,"select * from emp_details where id=$id");
$arr=mysqli_fetch_assoc($sel);
if(isset($_POST['sub'])){
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    if(mysqli_query($conn,"update emp_details set email='$email',uname='$uname',name='$name',age=$age,city='$city',gender='$gender' where id=$id"))
    {
        header("location:Index.php");
    }
    else
    echo "Updating Error";
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1>Edit Employee details</h1>
    <div class="container jumbtron">
        <form method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $arr['email'];?>">
            </div>
            <div class="form-group">
                <label>Uname</label>
                <input type="text" class="form-control" name="uname" value="<?php echo $arr['uname'];?>">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name"value="<?php echo $arr['name'];?>">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age"value="<?php echo $arr['age'];?>">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city"value="<?php echo $arr['city'];?>">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" name="gender"value="<?php echo $arr['gender'];?>">
            </div>
            <div class="form-froup">
                <input type="submit" class="btn btn-success" value="EDIT DETAILS" name="sub">
            </div>
        </form>
    </div>
</body>

</html>