
<marquee  direction="up" scrollamount="35" behavior="scroll"  loop>
  <?php

  	$dbname="top";
  	include("bc/mysql/connect.php");//top資料表
  	include("bc/index/top6/common.php");

  	$topse = $db->query(topse());
  	$row=$topse->fetchAll();
  	foreach ($row as $key => $value) {
  		$picName = $value[1];
  		$picDir = $value[2];
  		if (!empty($picName) && !empty($picDir)) {
  			$display = $picDir.$picName;
  		}else {
  			$display = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";
  		}

  		echo "
  		<img src='$display' />
  		";
  	}

  	$db=null;
  ?>
</marquee>
