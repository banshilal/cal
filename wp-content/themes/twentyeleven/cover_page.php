<?php
/*
Template Name: Cover Page
*/
?>

<?php get_header(); ?>
<?php //echo do_shortcode( '[responsive_slider]' ); ?>



<?php the_title(); ?>
<?php the_content(); ?>

<?php 

if(isset($_REQUEST['submit']))

   $amount= $_REQUEST['amount']; 

  $value1= $_REQUEST['select']; 
   $value2= $_REQUEST['select2']; 
  $res=$value1.$value2;
  
  

$optionsXML = simplexml_load_file(dirname(__FILE__).'/data.xml'); //Replace OptionsList.xml with your file path.
$options =  $optionsXML->xpath("//$res/text()");
while(list( $key , $value) = each($options)) {
   $cur=   $value ;
}



 
$float_value_of_var = floatval($cur);
 $float_value_of_var; 


 $result=$float_value_of_var*$amount;
 
 //$value_amount= $_REQUEST['value']; 
//$res=$value/$value2*$value_amount;

?>


<form name="form" method="post">
Amount value <input type="text" name="amount" id="value"  >
to----<select name="select">
<option value="USD">USD</option>
<option value="INR">INR</option>

</select>
  result <input type="text" name="res_value" id="value" value="<?php echo $result ?>" >
from---<select name="select2">
<option value="USD">USD</option>
<option value="INR">INR</option>

</select>

<input type="submit" value="submit" name="submit">
</form>

<br />

<br /><br /><br /><br /><br /><br /><br /><br /><br />




<?php get_footer(); ?>
 