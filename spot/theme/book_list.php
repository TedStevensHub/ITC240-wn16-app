<?php
/*booj_list.php
*/
?>

<?php include 'include/config.php';?>
<?php include 'include/header.php';?>
<?php

$sql = "select * from Books";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
    echo '<p>Here is my list of books I have read or plan to read!</p><br />';

	while ($row = mysqli_fetch_assoc($result))
    {
        //Book Partial Here
        
        echo
        '<p>
        Title: <b><a href="book_view.php?id='.$row['ID'].'">'.$row['Title'].'</a></b><br />
        Author: '.$row['Author'].'<br />
        Publication Date: '.$row['YearPublished'].'<br />
        Genre: '.$row['Genre'].'<br />
        Status: '.bookStatus($row['StatusKey']).'<br />
        </p>';
        
    }
}else{//no records
	echo '<div align="center">No books at this time.</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database


?>	
<?php include 'include/footer.php';?>