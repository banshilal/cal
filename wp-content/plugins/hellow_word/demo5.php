<?php
$a=$_REQUEST['fist_value'];
$b=$_REQUEST['sec_value'];

$c=$a+$b;

?>


<form name="form1" method="post" >
  <table width="512" height="285" border="1">
    <tr>
      <td width="129">&nbsp;</td>
      <td width="367"><input type="text" name="fist_value" id="textfield2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="sec_value" id="textfield3"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="result_value" id="textfield3" value="<?php echo $c ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit"></td>
    </tr>
  </table>

</form>





