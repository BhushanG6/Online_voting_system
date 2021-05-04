<html>
<?php include"header.php"; ?>

<body style="margin-top:100px">
<?php
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
include "header_admin.php";?>
<center><h3> Admin login  </h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM candidates' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
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
	}
?>
</body>
<p style="margin-top:20px"></p>
</html>
<?php include "footer.php";?>
