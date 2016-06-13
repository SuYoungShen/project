<script type="text/javascript">
  function top6() {
    alert("已有相同檔案");
  }
</script>

<ul class="ace-thumbnails clearfix">

<?php

include ("mysql/connect.php");

$open = mysqli_select_db($db,"top");//開啟資料庫
$top6dir='index/top6/images/';

if(isset($_FILES["top6"])){


  foreach($_FILES["top6"]["tmp_name"] as $key => $top6tmp_name){//檔案以陣列方式接收

    $top6name = $_FILES["top6"]["name"][$key];//抓取檔案名稱
    $top6tmp = $_FILES["top6"]["tmp_name"][$key];//抓取檔案

    if(file_exists($top6dir.$top6name)){//檢查是否有相同檔案
      $date = date("Y-m-d H:i:s");//時間
      echo "<script>top6();</script>";
      $in = "Update test Set
                        name = '".$top6name."',
                        path = '".$top6dir."',
                        datatime = '".$date."'
                      Where
                        id = '".$key."'
                      ";
                      // if (is_file($top6dir.$top6name)) {
                      //   // echo $top6name;
                      //   unlink($top6dir.$top6name);
                      // }

    }else {

      move_uploaded_file($top6tmp,$top6dir.$top6name);//把檔案移到指定dir


      $in = "Update test Set
                            name = '".$top6name."',
                            path = '".$top6dir."',
                            datetime = '".$date."'
                          Where
                            id = '".$key."'
                          ";
    }
    mysqli_query($db,$in);
  }
}

$sql_1 = "SELECT * From top" ;
$test = mysqli_query($db,$sql_1);

while (  $row = mysqli_fetch_array($test)) {
  $top6 = $row[1];
  echo "
   <li>
     <a href='index/top6/images/$top6' title='景點名' data-rel='colorbox'>
       <img width='150' height='150' alt='150x150' src='index/top6/images/$top6'/>
         <div class='text'>
           <div class='inner'>景點名</div>
         </div>
     </a>

     <div class='tools tools-top'>
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

</ul>
