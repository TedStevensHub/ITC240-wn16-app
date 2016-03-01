<?php
/*template.php
use this file as a model for making more app pages
*/
?>

<?php include 'include/config.php';?>
<?php include 'include/header.php';?>

<p>Contact Us</p>

<?php
if(isset($_POST['Email'])){
    /*echo '<pre>';
    var_dump($_POST);
    echo '</pre>';*/
    
    $to='tedstevens@comcast.net';
    $subject='Contact form from Spot app';
    $content='
    <p><b>Comment: </b></p>
    <p>'.$_POST['Comments'].'</p>
    ';
    $replyTo=$_POST['Email'];
    
    $response = safeEmail($to, $subject, $content, $replyTo,'html');

    if($response)
    {
        echo '<p>Thank you! We will get back to you shortly.</p><br />';
    }else{
       echo '<p>Trouble with HTML email!</p><br />'; 
    }
}else{
    echo '
    <form action="contact.php" method="post">
    
    <p>Name: <input type="text" name="Name" /></p>
    <p>Email: <input type="email" name="Email" /></p>
    <p>Comment: <textarea name="Comments" /></textarea></p>
    <p>Name: <input type="submit" value="Send" /></p>
    
    </form>
    ';
}
?>

<?php include 'include/footer.php';?>