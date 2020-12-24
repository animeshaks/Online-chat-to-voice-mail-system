<?php
session_start();
//$name=$_SESSION['name'];
?>
<style>
#data
{
	background-color:black;
	padding:10px 7px;
	margin-top:10px;
}

</style>
<?php
$con=mysqli_connect('localhost','root','','chat');
$q="select * from message";
$rs=mysqli_query($con,$q);
while($row=mysqli_fetch_row($rs)){
	echo"<p id='data'>
		<h5>Send By : $row[2]
		$row[3]
				<p>

				$row[1]
				</p>

		</H5>";
	}
?>
