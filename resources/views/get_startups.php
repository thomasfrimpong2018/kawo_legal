
<?php
//use Illuminate\Support\Facades\Storage;

$host='localhost';
$user="root";
$password="";
$database="kawo_legal";





$db=new PDO("msqli:host=.$host.; dbname=.$database.;user=.$user.; password=.$password");



$sql="SELECT  * FROM startups WHERE business_name LIKE ' %".$_POST['search']." %' ";
$array=$db->query($sql);

foreach($array as $key){

    ?>
<div id="user"> 
    <img src="<?php echo $key['business_logo'] ?>" id="pics" />
    $nbsp;<span><?php echo $key['business_name']; ?></span>
</div>

<?php

}

?>