<?php
include("mySQLConnect.php");
if(isset($_POST['sending'])){
$data = mysql_real_escape_string($_POST['sending']);
if(!empty($data)){
		$query = mysql_query("SELECT * FROM records WHERE (title LIKE '%$data%') OR (keywords LIKE '%$data%')");
		if(mysql_num_rows($query)!=0){
			while($row = mysql_fetch_assoc($query)){
				
				echo "
				<div>
				<div class='title'><a href='".$row['url']."'>".$row['title']."</a></div>
				<div class='url'>
					".$row['url']."
				</div>
				</div>
				";
				
			}
		}
		else
		{
			echo "No matches found!";
		}
}
else
{
	echo "ERROR";
}
}
else
{
	echo "ERROR";
}
?>
