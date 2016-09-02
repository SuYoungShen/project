
								<style type="text/css">
				          marquee img
				            {
				              border-width: 0px; /* 避免img受到超連結影響出現border，所以border-width: 0px;*/
				              width: 350px;
				              height: 233px;
				            }
				        </style>
<?php
include './mysql/connect.php';//top資料表
include './index/top6/common.php';


$topse = $db->query(topse());
$row=$topse->fetchAll();
foreach ($row as $key => $value) {
  $picName = $value[1];
  $picDir = $value[2];
  echo "
    <img src='$picDir$picName'  />
  ";
}

$db=null;
?>
<!-- <img src="../images/marquee/white.gif" />
<img src="../images/marquee/black.gif" /> -->
