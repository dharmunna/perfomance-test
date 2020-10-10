<?php
    $con = new mysqli("localhost","root","","munnadhar");   /* Connection code(Connect with database) */
    echo "<a href='homepage.php'>HOME</a> | <a href='catagoryview.php'>VIEW BOOK</a> | <a href='literaturedisplay.php'>LITERATURE</a> | <a href='nobledisplay.php'>NOBLE</a>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
    <style>
        body{
            margin: 10% auto 0;font-size: 30px; background-color: #AAF5CA;
        }
        td{
            text-align: center;
        }
        *{
            box-sizing: border-box;
        }
        .column{
            float:left;
            width:33.33%;
            padding:5px;
        }
        .row::after{
            content:"";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
>
    <center><h1>Book List</h1></center>
    <table>
       
          
        <?php
    /* Fetch data from databse(select query) */
            $res = $con->query("select * from comicsbook") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($res))
            {
        ?>
        <div class="row";>
        <div class="column">
                 <img src="images/<?php echo $row["RegProfile"]; ?>" height="300" width="300" alt="User image"><br>
            <?php echo $row["bookname"]; ?><br>
            <?php echo $row["writername"]; ?><br>
            <?php echo $row["publisher"]; ?><br>
            <?php echo $row["price"]; ?><br>
             <a href="detailsdisplay.php">Details</a><br>
            <a href="registration1.php?isEdit=<?php echo $row["bookname"]; ?>">Edit</a> | <a href="?delete=<?php echo $row["bookname"]; ?>">Delete</a>
        </div>
        <?php
            }
        ?>
    </table>
    
<?php
    /* Delete code.Wehen click on delete link this will perform.!*/
        if(isset($_REQUEST["delete"]))
        {$query2="select RegProfile from comicsbook where bookname='".$_REQUEST["delete"]."'";
            $result=mysqli_query($con,$query2) or die(mysqli_error($con));
            while($row1=mysqli_fetch_array($result))
            {
                $image1=$row1["RegProfile"];
            }
            unlink("images//".$image1);
            $query3="delete from comicsbook where bookname='".$_REQUEST["delete"]."'";
            mysqli_query($con,$query3) or die(mysqli_error($con));
            echo "<script>alert('Data deleted successfully..!');window.location='comicsdisplay.php';</script>";   
        }
    ?>

</body>
</html>