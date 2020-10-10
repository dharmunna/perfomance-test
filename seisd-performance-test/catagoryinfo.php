<?php
    $con = new mysqli("localhost","root","","munnadhar");   /* Connection code(Connect with database) */
    echo "<a href='homepage.php'>HOME</a> | <a href='catagoryview.php'>VIEW BOOK LIST</a>";
?>
<!DOCTYPE html>
<body>

<center><h2>ADD BOOK FOLLOW THE CATAGORY</h2></center>
<center><p><a href="comicsaddinfo.php">COMICS</a></p></center><br>
<center><p><a href="literatureaddinfo.php">LITERATURE</a></p></center><br>
<center><p><a href="nobleaddinfo.php">NOBLE</a></p></center><br>

</body>
</html>

