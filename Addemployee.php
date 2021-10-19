<?php
include("conn.php");
if(isset($_POST['sub'])){
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    if(mysqli_query($conn,"insert into Emp_details(email,uname,name,age,city,gender) values('$email','$uname','$name',$age,'$city','$gender')"))
    {
       header("location:Index.php");
    }
    else
    echo "Already added";
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1>Add Employee details</h1>
    <div class="container jumbtron">
        <form method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@gmail.com">
            </div>
            <div class="form-group">
                <label>Uname</label>
                <input type="text" class="form-control" name="uname"placeholder="enter name@">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name"placeholder="enter name">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age"placeholder="enter age">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city"placeholder="enter city">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" name="gender"placeholder="enter gender">
            </div>
            <div class="form-froup">
                <input type="submit" class="btn btn-success" value="ADD DETAILS" name="sub">
            </div>
        </form>
    </div>
</body>

</html>