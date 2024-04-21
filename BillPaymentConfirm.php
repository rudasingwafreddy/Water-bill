<h3>Bill Details - Bill Payment</h3>
<hr>
<?php
	$emp_id = (int)$_SESSION['user_id'];
	$bills_id = (int)$_GET['billid'];
	$clientid="";
	$custname="";
	$custadd="";
	$custphone="";
	$mters="";
	$con=mysql_connect("localhost","root","");
	mysql_select_db("waterb_db")or die("no database selected!!");
	
	$billsel=mysql_query(" select * from tbl_bill where billid='$bills_id'");
	$billrecord=mysql_fetch_array($billsel);
	
	
	if(isset($_POST["myBtn"]))
	{
	$clid=$_POST["clid"];
	$names=$_POST["names"];
	$opt=$_POST["opt"];
	
	$phones=$_POST["phones"];
	
	$cons=$_POST["cons"];
	$mters=$_POST["mters"];
	
	$bamount=$_POST["bamount"];
	$amtpen=$_POST["amtpen"];
	
	
	$tot=$_POST["tot"];
	$mbill=$_POST["mbill"];
	$empids=$_POST["empids"];
	
	
	
mysql_query("update tbl_payment set status='$opt' where billid='$mbill'");

mysql_query("update tbl_bill set status='$opt' where billid='$mbill'");


	?>
	<script>
	alert(" Operation Executed Successfully!!!");
	</script>
	<?php
	
	}

?>

<style>
#mycontent
{
border-radius:10px;
border:2px solid #000000;
height:470px;
width:600px;
margin-left:30px;
margin-top:10px;
}
#titles
{
border-radius:5px;
border:2px solid #000000;
height:20px;
width:590px;
margin-left:2px;
margin-top:2px;
background-color:#000000;
color:#FFFFFF;
text-align:center;
}
#titles1
{

height:20px;
width:590px;
margin-left:20px;
margin-top:10px;

color:#000000;

}
#fieldclient
{

border:2px solid #000000;
height:80px;
width:540px;
margin-left:20px;
margin-top:2px;
margin-right:20px;

}
legend {
    background: none;
    border: none;
    padding: none;
    color:red;
	}
	#cltable
	{
	margin-left:30px;
	}
	#totcash
	{
	margin-left:80px;
	
	}
	#totcash1
	{
	margin-left:130px;
	color:#FF0000;
	}
	#userr
	{
	
	color:#FF0000;
	}
	#fieldcontrol
	{
	border:2px solid #000000;
height:60px;
width:240px;
margin-left:20px;


	}
</style>
<script>
function validat()
{
var t=document.getElementById("tot").value;
var clid=document.getElementById("clid").value;
clid=Number(clid);

t=Number(t);
if(t>0 && clid>0)
{

return true;
}
else
{
alert(" check your input please!!");
return false;
}

}
function mycal()
{
 var x = document.getElementById("cons").value;
 x=Number(x);
 var y = document.getElementById("bamount").value;
 y=Number(y);
 var amtpen = document.getElementById("amtpen").value;
 amtpen=Number(amtpen);
 
 var mytot=(x*y)+amtpen;
 mytot=Number(mytot);
 document.getElementById("tot").value=mytot;
 
  document.getElementById("totcash1").innerHTML =mytot;
  if(mytot>0)
  {
  document.getElementById("myBtn").disabled = false;
  }
  else
  {
  document.getElementById("myBtn").disabled = true;
  }
}
</script>


<div id="mycontent">
<div id="titles"> Bill Preparation
</div>
<form action="view.php?mod=employee&view=billconfirm" method="POST">
<fieldset id="fieldclient">
<legend>Client Details</legend>
<table id="cltable"><tr>




            <td>Client ID</td>
			<td><input type="text" name="clid" id="clid" value="<?php echo $billrecord["cust_id"]; ?>" readonly/></td>
			<td>Names</td>
			<td><input type="text" name="names" value="<?php echo $billrecord["cust_name"]; ?>" readonly/></td>
		</tr>
		<tr>
            <td>Address</td>
			<td><input type="text" name="addr" value="<?php echo $billrecord["cust_adderss"]; ?>" readonly/></td>
			<td>Telephone</td>
			<td><input type="text" name="phones" value="<?php echo $billrecord["cust_phone"]; ?>" readonly/></td>
		</tr>
		
</table>
</fieldset>

<div id="titles1">
       <table>
        <tr>
            <td>Bill Date :</td>
			<td><?php echo date("d/m/Y") ?></td>
			
		</tr>
		
</table>
</div>
<hr />

<table id="tablecontent">
               <tr>
			   <td>
			   <table >
			   <tr>
            <td>Meter Number</td>
			<td><input type="text" name="mters" value="<?php echo $billrecord["meternum"]; ?>"   readyonly />
			<input type="hidden" name="empids" value="<?php echo $billrecord["empid"]; ?>"  />
			<input type="hidden" name="email" value="<?php echo $billrecord["email"]; ?>"  />
			<input type="hidden" name="mbill" value="<?php echo $bills_id; ?>"  />
			
			
			</td>
			</tr>
			   <tr>
            <td>Consumption</td>
			<td><input type="text" name="cons" id="cons"   value="<?php echo $billrecord["meter_cons"]; ?>" /></td>
			</tr>
			<tr>
			<td>Unit Price</td>
			<td><input type="text" name="bamount" id="bamount" value="<?php echo $billrecord["unitprice"]; ?>" /></td>
		</tr>
		
		<tr>
			<td>Penalty</td>
			<td><input type="text" name="amtpen" id="amtpen" value="<?php echo $billrecord["meterpen"]; ?>" /></td>
		</tr>
		<tr>
            <td>Total</td>
			<td><input type="text" name="tot" id="tot" value="<?php echo $billrecord["totprrice"]; ?>" /></td>
			
		</tr>
		<tr>
            <td>Option</td>
			<td><input type="radio" name="opt"  value="Confirmed" checked/> Confirmed<input type="radio" name="opt"  value="Cancelled" /> Cancelled</td>
			
		</tr>
		
</table> 	   
			   
			   </td>
			   <td><strong> <h1 id="totcash">Total Cash</h1> </strong><br/><p id="totcash1"><strong><?php echo $billrecord["totprrice"]; ?></strong></p></td>
			   </tr>
</table>
<hr />
<table><tr><td>
<fieldset id="fieldcontrol">
<legend>Controls</legend>
<table id="cltable"><tr>
           
			<td><input type="submit" name="myBtn" id="myBtn" value="Evaluate" onclick="return validat();"/></td>
			
			<td><input type="submit" name="Cancel" value="cancel"/></td>
		</tr>
	
		
</table>
</fieldset>
</td>
<td> <p id="userr"><strong>Prepared By   <?php echo $billrecord["empnames"]; ?> </strong></p></td>
</tr>
</table>
</form>
</div>
<p>&nbsp;</p>

