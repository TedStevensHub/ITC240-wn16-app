<?php
/*weekdays.php
use this file as a model for making more app pages
*/
?>

<?php include 'include/config.php';?>
<?php include 'include/header.php';?>

<?php



?>

        <center><img src="http://edison.seattlecentral.edu/~tsteve04/ITC240/Conditionals/<?=$picture?>" alt="<?=$alt?>"></center>
        <h1>Seize the day! <?=$day?> to be exact.</h1>
        <p>Your horoscope for <?=$day?> reveals that a project will be completed. Do not rush your work. Take your time and think things through before proceeding with the heavy lifting. Enjoy the rest of your day as you finish the project swiftly and efficiently.</p>
        <br>
        <ul>
            <li><a href="?day=Monday">Monday</a></li>
            <li><a href="?day=Tuesday">Tuesday</a></li>
            <li><a href="?day=Wednesday">Wednesday</a></li>
            <li><a href="?day=Thursday">Thursday</a></li>
            <li><a href="?day=Friday">Friday</a></li>
            <li><a href="?day=Saturday">Saturday</a></li>
            <li><a href="?day=Sunday">Sunday</a></li>
        </ul>
	
<?php include 'include/footer.php';?>