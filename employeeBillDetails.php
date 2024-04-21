<h3>Bill Details - Seach Bill</h3>
<hr>
<style>
	

#mycontent
{
border-radius:10px;
border:2px solid #000000;
height:450px;
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


	#meterDropdown {
    position: absolute;
    width: 150px; /* Adjust as needed, considering borders */
    max-height: 150px; /* Adjust as needed */
    overflow-y: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff; /* Set the background color */
    display: none; /* Initially hide the dropdown */
}

#meter-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

#meter-list li {
    padding: 8px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#meter-list li:hover {
    background-color: #f5f5f5;
}

.new_btn{
    background-color: #214ac4;
	border-radius:5px;
}

.new_btn:hover {
    background-color: #11349c;
}


</style>



<?php
	$emp_id = (int)$_SESSION['user_id'];
	$clientid="";
	$custname="";
	$custadd="";
	$custphone="";
	$mters="";
	$con=mysql_connect("localhost","root","");
	mysql_select_db("waterb_db")or die("no database selected!!");
	if(isset($_POST["searchs"]))
	{
	$mters=$_POST["mters"];
	$querys=mysql_query(" select * from tbl_meter where meterNum='$mters'");
	$clients=mysql_fetch_array($querys);
	$clientid=$clients["cust_id"];
	
	$queryss=mysql_query(" select * from tbl_customer where cid='$clientid'");
	$clientss=mysql_fetch_array($queryss);
	$custname=$clientss["cname"];
	$email=$clientss["email"];
	$custadd=$clientss["address"];
	$custphone=$clientss["c_mobile"];
	}
	if(isset($_POST["myBtn"]))
	{
	$clid=$_POST["clid"];
	$names=$_POST["names"];
	$addr=$_POST["addr"];
	$email=$_POST["email"];
	
	$phones=$_POST["phones"];
	
	$cons=$_POST["cons"];
	$mters=$_POST["mters"];
	
	$bamount=$_POST["bamount"];
	$amtpen=$_POST["amtpen"];
	
	
	$tot=$_POST["tot"];
	$empnames=$_SESSION['user_name'];
	
	
	$msg = mysql_query(" insert into tbl_bill values('','$clid','$names','$addr','$phones','$cons','$bamount','$amtpen','$tot','$mters','$emp_id','$empnames',NOW(),'Not Paid','$email')");
		if($msg){
			?>
<script>
	alert(" Created!!!");
	</script>
			<?php
		}else{
			?>
<script>
	alert(" not Created!!!");
	</script>
			<?php
		}
$messages="There is new bill genereted for, to be paid!";
$phno="078977506698";
include("flutterwave/message.php");

	?>
	<script>
	alert(" Bill Created Successfully!!!");
	</script>
	<?php
	
	}

?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
$(document).ready(function() {
            $("#mters").keyup(function() {
                $.ajax({
                    type: "POST",
                    url: "search_meter.php",
                    data: 'keyword=' + $(this).val(),
                    beforeSend: function() {
                        // You can add a loader or any visual indication here if needed
                    },
                    success: function(data) {
                if (data.trim() !== "") {
                    $("#meterDropdown").html(data);
                    $("#meterDropdown").show();
                } else {
                    $("#meterDropdown").hide();
                }
            }
                });
            });
        });

        function selectMeter(val) {
            $("#mters").val(val);
            $("#meterDropdown").hide();
        }
    </script>

<form action="view.php?mod=employee&view=viewbill" method="POST">
        <table>
            <tr>
                <td>Enter Meter</td>
                <td>
                    <input type="text" name="mters" id="mters" placeholder="Type to search" style="padding:5px" />
                    <div id="meterDropdown"></div>
                </td>
                <td><input type="submit" name="searchs" value="Search" style="padding:5px" class="new_btn"/></td>
            </tr>
        </table>
    </form>

<!-- <form action="view.php?mod=employee&view=viewbill" method="POST">	
<table>
     <tr>
	 <td>enter Meter</td>
	 <td><input type="text" name="mters" /><select id="meterDropdown" name="meterDropdown"></select>
</td>
	 <td><input type="submit" name="searchs" value="Search" /></td>
	 </tr>
</table>
</form> -->

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
<form action="view.php?mod=employee&view=viewbill" method="POST">
<fieldset id="fieldclient">
<legend>Client Details</legend>
<table id="cltable"><tr>




            <td>Client ID</td>
			<td><input type="text" name="clid" id="clid" value="<?php echo $clientid; ?>" readonly/></td>
			<td>Names</td>
			<td><input type="text" name="names" value="<?php echo $custname; ?>" readonly/>
			<input type="hidden" name="email" value="<?php echo $email; ?>" readonly/></td>
		</tr>
		<tr>
            <td>Address</td>
			<td><input type="text" name="addr" value="<?php echo $custadd; ?>" readonly/></td>
			<td>Telephone</td>
			<td><input type="text" name="phones" value="<?php echo $custphone; ?>" readonly/></td>
		</tr>
		
</table>
</fieldset>

<div id="titles1">
       <table>
        <tr>
            <td>Bill Date  :</td>			
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
			<td><input type="text" name="mters" value="<?php echo $mters; ?>"   readyonly /></td>
			</tr>
			   <tr>
            <td>Consumption</td>
			<td><input type="text" name="cons" id="cons"   onkeyup="mycal();" /></td>
			</tr>
			<tr>
			<td>Unit Price</td>
			<td><input type="text" name="bamount" id="bamount" onkeyup="mycal();" /></td>
		</tr>
		
		<tr>
			<td>Penalty</td>
			<td><input type="text" name="amtpen" id="amtpen" onkeyup="mycal();" /></td>
		</tr>
		<tr>
            <td>Total</td>
			<td><input type="text" name="tot" id="tot" onkeyup="mycal();" /></td>
			
		</tr>
		
</table> 	   
			   
			   </td>
			   <td><strong> <h1 id="totcash">Total Cash</h1> </strong><br/><p id="totcash1"><strong>0.00</strong></p></td>
			   </tr>
</table>
<hr />
<table><tr><td>
<fieldset id="fieldcontrol">
<legend>Controls</legend>
<table id="cltable"><tr>
           
			<td><input type="submit" name="myBtn" id="myBtn" value="Add" onclick="return validat();"/></td>
			
			<td><input type="submit" name="Cancel" value="cancel"/></td>
		</tr>
	
		
</table>
</fieldset>
</td>
<td> <p id="userr"><strong>Employee   <?php echo $_SESSION['user_name']; ?> </strong></p></td>
</tr>
</table>
</form>
</div>
<p>&nbsp;</p>

