<?php
/*book_view.php
use this file as a model for making more app pages
*/
?>

<?php include 'include/config.php';?>
<?php include 'include/header.php';?>
<?php

if(isset($_GET['id']) && (int)$_GET['id'] > 0){
//if good data, show
    $id=(int)$_GET['id'];
}else{
//send them away    
    header('Location:book_list.php');
}

$sql = "select * from Books where ID=$id";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
        echo '<img src="upload/book'.$id.'.jpg" />';
    }
}else{//no records
	echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database


?>	
<?php include 'include/footer.php';?>