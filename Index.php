<?php
include("conn.php");
if(!empty($_GET['del'])){
    $id=$_GET['del'];
    if(mysqli_query($conn,"delete from emp_details where id=$id")){
        header("location:Index.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
     <style>
         #a{
             font-size: 25px;
         }
     </style>
</head>
    <body class="bg-light">
        <div class="jumbtron container">
        <table class="table table-hover mt-4" border=2>
            <tr>
                <td colspan="8" align="center" id="a" class="table-success">Employee Details</td>
            </tr>
            <tr>
                <td colspan="8" align="center" class="table-danger">
                    <a href="Addemployee.php" id="a">Add Details</a>
                </td>
            </tr>
            <tr>
                <th class="table-success">S.no</th>
                <th class="table-warning">Email</th>
                <th class="table-primary">Uname</th>
                <th class="table-secondary">Name</th>
                <th class="table-info">Age</th>
                <th class="table-success">City</th>
                <th class="table-warning">Gender</th>
                <th class="table-secondary">Action</th>
            </tr>
            <?php 
           $sel=mysqli_query($conn,"select * from emp_details order by id desc");
            if(mysqli_num_rows($sel)>0) 
            {
                $sn=1;
                while($arr=mysqli_fetch_assoc($sel))
                {
                    ?>
                    <tr>
                        <td class="table-success"><?php echo $sn;?></td>
                        <td class="table-warning"><?php echo $arr['email'];?></td>
                        <td class="table-primary"><?php echo  $arr['uname'];?></td>
                        <td class="table-secondary"><?php echo  $arr['name'];?></td>
                        <td class="table-info"><?php echo  $arr['age'];?></td>
                        <td class="table-success"><?php echo  $arr['city'];?></td>
                        <td class="table-warning"><?php echo  $arr['gender'];?></td>
                        <td class="table-secondary">
                        <a href="Edit_Employee.php?edit=<?php echo $arr['id'];?>">Edit</a> 
                         &nbsp; &nbsp; &nbsp; 
                        <a href="?del=<?php echo $arr['id'];?>">Delete</a></td>
                    </tr>
                    <?php
                    $sn++;
                }
            }
            else{
                ?>
                <tr>
                    <td colspan="6" align="center">No record found</td>
                </tr>
                <?php 
            }
           ?>
        </table>
        </div>
    </body>
</html>