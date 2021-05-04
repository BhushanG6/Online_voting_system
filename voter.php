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
<h4 style="text-align:center"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3 style="text-align:center">Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>

<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM candidates' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No Candidates found</font>';
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
?>
<center><input style="background-color:green;color:#fff" type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>

</body>
</html>
<?php include "footer.php" ;?>
