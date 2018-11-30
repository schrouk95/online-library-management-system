<?php
include "connection.php";
include "navbar.php";
?>

    <!DOCTYPE html>
    <html>
<head>

        <title>ADD BOOK</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        section
        {
            margin-top: -30px;
        }
    </style>

</head>
<body>
<section>
    <div class="reg_img">

        <div class="box2">
            <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp &nbsp &nbsp  Library Management System</h1>
            <h1 style="text-align: center; font-size: 25px;">ADD books Form</h1>
            <form name="Registration" action="" method="POST">

                <div class="addbook">
                    <input class="form-control" type="text" name="id" placeholder="ID" required=""> <br>
                    <input class="form-control" type="text" name="bname" placeholder="BOOK_NAME" required=""> <br>
                    <input class="form-control" type="text" name="aname" placeholder="Authors Name" required=""> <br>
                    <input class="form-control" type="password" name="edition" placeholder="Edition" required=""> <br>
                    <input class="form-control" type="text" name="ststus" placeholder="Status" required=""><br>
                    <input class="form-control" type="text" name="quantity" placeholder="Quantity" required=""><br>
                    <input class="form-control" type="text" name="department" placeholder="Department" required=""><br>
                    <input class="btn btn-default" type="submit" name="submit" value="addbook" style="color: black; width: 70px; height: 30px">
                </div>
            </form>

        </div>
    </div>
</section>

<?php
if(isset($_POST['submit']))
{
$count=0;
$sql="SELECT bid from `books`";
$res=mysqli_query($db,$sql);

while($row=mysqli_fetch_assoc($res))
{
    if ($row['bid'] == $_POST['id'])
    {
        $count = $count + 1;
    }
}
if($count==0) {
    mysqli_query($db, "INSERT INTO `books` VALUES('$_POST[id]', '$_POST[bname]', '$_POST[aname]', '$_POST[edition]', '$_POST[ststus]', '$_POST[quantity]','$_POST[Department]');");

?>
<script type="text/javascript">
    alert("Addition successful");
</script>

<?php
}
else
{

?>
    <script type="text/javascript">
        alert("The book_name already exist.");
    </script>
    <?php
}
}
?>
<footer>

    <p style="color:white;text-align: center;">
        <br>
        Email:&nbsp Online.library@gmail.com <br><br>
        Mobile:&nbsp &nbsp +880171*******
    </p>

</footer>

</body>
</html>



