<?php

echo "PHP CALCULATOR!";

ini_set('display_errors',0);
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
if($operator=="+")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1+$add2;
}
if($operator=="-")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1-$add2;
}
if($operator=="*")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res =$add1*$add2;
}
if($operator=="/")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1/$add2;
}
if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['fvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";
}
else if($_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";
}
}
?>
<form>
<table style="border:groove #00FF99">
            <tr>
                <td style="background-color:aqua; color:red; font-family:'impact'">Enter First Number</td>
                <td colspan="1">
               
                    <input name="fvalue" type="text" style="color:red"/></td>
            <tr>
                <td style="color:burlywood; font-family:'impact'">Select Operator</td>
                <td>
                    <select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
               </tr>
            <tr>
                <td style="background-color:aqua; color:red; font-family:'impact'">Enter Second Number</td>
                <td class="auto-style5">
                    <input name="lvalue" type="text"  style="color:red"/></td>
               
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>
               
            </tr>
            <tr>
                <td style="background-color:aqua;color:red">The answer is: </td>
                <td style="color:darkblue"><?php echo $res;?></td>
               
            </tr>
       </table>
 </form>
 echo "Created by <a href="https://github.com/MrCodeInc/">MrCodeInc</a>";

 echo "You can view the source code <a href="https://github.com/MrCodeInc/phpcalc/">here.</a>";
 
 ?>
