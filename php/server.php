<?php
include "../php/conn.php";

$q=mysql_query("select * from tb_comment");
while($row=mysql_fetch_array($q)){
		$comments[] = array("id"=>$row[id],"user"=>$row[username],"time"=>$row[date]);
}
echo json_encode($comments);

?>