<html>
<body style="margin-top:100px">

<?php
 include "header.php";
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<h4 style="text-align:center"> Welcome , <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<br>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<?php global $error; echo $error; ?>
<?php global $msg; ?>
<?php
include "connection.php";
$sql = mysqli_query($con, 'SELECT * FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status="VOTED"');
if(mysqli_num_rows($sql) > 0 ) {
	if($msg=="")
	$msg="<center><h4><font color='#FF0000'>You have already been voted !!!</h4></center></font>";
	echo $msg;
	$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
	$row = mysqli_fetch_assoc($sql);
	echo '<br><center><B><h3>';
	echo "You have voted for: " . " " . $row['voted'];
	echo '</h3></B></center>';
}
else
{
	$member = mysqli_query($con, 'SELECT * FROM candidates' );
	echo '<h3 style="text-align:center">Make a Vote </h3>';
	if (mysqli_num_rows($member)== 0 ) {
		echo '<font color="red"><center>No Candidates found</center></font>';
	}
	else {
		echo '<center><table><tr bgcolor="#FF6600">
		<td width="30px">  </td>
	<td width="30px">ID</td>
	<td width="100px">CANDIDATE</td>
	</tr>';
	while($mb=mysqli_fetch_object($member))
			{
				
				$id=$mb->can_id;
				$name=$mb->fullname;
			echo '<tr bgcolor="#BBBEFF">';
		echo '<td> <label><input type="radio" name="lan" value="'.$name.'" > </td>';		
		echo '<td>'.$id.'</td>';
		echo '<td>'.$name.'</td>';;
		echo '</label>';
		echo "</tr>";
			}
			echo'</table></center><br>';
		}
		
		echo '<center><input style="background-color:green;color:#fff" type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>';
}
?>

</form>

</body>
</html>
<?php include "footer.php" ;?>
