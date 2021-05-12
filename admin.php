<html>
<?php include"header.php"; ?>

<body style="margin-top:100px">
<?php
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
echo '<center><h3> Admin login  </h3></center>';
include "header_admin.php";?>
<br>
<?php global $msg; ?>

<form action="display_result.php" name="result" method="post" id="result" >
<?php

include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM candidates' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<center>';
	echo '<font color="red" size="16 px">  No Candidates found </font>';
	echo '</center>';
}
else {
echo'<center><h4> Voting Result </h4></center>';
	echo '<center><table><tr bgcolor="#FF6600">
<td width="30px">ID</td>
<td width="100px">Party</td>
<td width="100px">CANDIDATE</td>
<td width="30px">VOTE</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{
			$id=$mb->can_id;
			$party=$mb->fullname;
			$vote=$mb->votecount;
			$name=$mb->about;
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';
	echo '<td>'.$party.'</td>';
	echo '<td>'.$name.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';


	$sql1 =mysqli_query($con, 'Select * from result where Status="NOT DISPLAY"');
	if(mysqli_num_rows($sql1) > 0)
	{
 	echo '<br><br><center><input style="background-color:orange;color:#fff" type="submit" value="Announce Result" name="submit_result" style="height:30px; width:100px" /></center>';
  	}
 	else
 	{
 			
 		 		echo '<br><br><center><button disabled style="background-color:green;color:#fff;" type="submit" name="submit_result" style="height:30px; width:100px" />Result Announced</center>';
  	}
  }
 ?>
</form>

</body>
<p style="margin-top:20px"></p>
</html>
<?php include "footer.php";?>
