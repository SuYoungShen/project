<?php

  $dbname="view";
  include ("mysql/connect.php");

  $viewse = $db->query(ViewSe());//查詢資料表
  $display = $viewse->fetchAll();

  foreach ($display as $key => $value) {

    $vi=$viewpoint[$key]=$value[1];
    $pic=$pic_name[$key]=$value[2];
    $pdir=$picDir[$key] = $value[3];
    $dat=$datetime[$key] = $value[4];
    
    echo "
    <li>
      <a href='$pdir$pic' title='$vi' data-rel='colorbox'>
        <img width='150' height='150' alt='150x150' src='$pdir$pic' />
        <div class='text'>
          <div class='inner'>$vi</div>
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

  $db=null;
?>
