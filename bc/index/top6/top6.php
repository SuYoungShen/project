<ul class="ace-thumbnails clearfix">

<?php

include ("mysql/connect.php");

$open = mysqli_select_db($db,"test");//開啟資料庫
$top6dir='index/top6/images/';

if(isset($_FILES["top6"])){

  foreach($_FILES["top6"]["tmp_name"] as $key => $top6tmp_name){//檔案以陣列方式接收

    $top6name = $_FILES["top6"]["name"][$key];
    $top6tmp = $_FILES["top6"]["tmp_name"][$key];

    if(file_exists($top6dir.$top6name)){//檢查是否有相同檔案
      // echo "已有";

    }else {
      move_uploaded_file($top6tmp,$top6dir.$top6name);//把檔案移到指定dir
       unlink($top6tmp);


      $in = "Insert Into test(id, name, path)
                           Values('".$top6name."','".$top6name."','".$top6dir."')";
                           mysqli_query($db,$in);
    }
  }

}


$sql_1 = "SELECT * From test" ;
$test = mysqli_query($db,$sql_1);

while (  $row = mysqli_fetch_array($test)) {
  $a = $row[1];
  echo "
   <li>
     <a href='index/top6/images/$a' title='景點名' data-rel='colorbox'>
       <img width='150' height='150' alt='150x150' src='index/top6/images/$a'/>
         <div class='text'>
           <div class='inner'>景點名</div>
         </div>
     </a>

     <div class='tools tools-top'>
       <a href='#'>
         <i class='ace-icon fa fa-link'></i>
       </a>

       <a href='#'>
         <i class='ace-icon fa fa-paperclip'></i>
       </a>

       <a href='#'>
         <i class='ace-icon fa fa-pencil'></i>
       </a>

       <a href='#'>
         <i class='ace-icon fa fa-times red'></i>
       </a>
     </div>
   </li>
  ";
}
 // $row = mysqli_fetch_array($test);





?>
<!--
<li>
  <a href="index/top6/images/" title="景點名" data-rel="colorbox">
    <img width="150" height="150" alt="150x150" src="index/top6/images/"/>
      <div class="text">
        <div class="inner">景點名</div>
      </div>
  </a>

  <div class="tools tools-top">
    <a href="#">
      <i class="ace-icon fa fa-link"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-paperclip"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-pencil"></i>
    </a>

    <a href="#">
      <i class="ace-icon fa fa-times red"></i>
    </a>
  </div>
</li> -->


</ul>
