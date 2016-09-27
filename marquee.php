<style type="text/css">
	marquee img
	{
		border-width: 0px; /* 避免img受到超連結影響出現border，所以border-width: 0px;*/
		width: 350px;
		height: 233px;
	}
</style>
<marquee scrollAmount="20" BEHAVIOR="scroll"  loop="0">
<?php

	$dbname="top";
	include("bc/mysql/connect.php");//top資料表
	// include("bc/index/top6/common.php");

	$topse = $db->query(topse());
	$row=$topse->fetchAll();
	$picDir = "bc/index/top6/images/";
	foreach ($row as $key => $value) {
		$picName = $value[1];

		if (!empty($picName)) {
			$display = $picDir.$picName;
		}else {
			$display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
		}

		echo "
		<img src='$display' />
		";
	}

	$db=null;

	function topse()
  {
    $topse = "SELECT * From top";
    return $topse;
  }
?>
</marquee>
