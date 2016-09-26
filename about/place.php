<?php
  $dbname="about";
  include ("bc/mysql/connect.php");

  $placeSe = $db->query(PlaceSe());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "about/place/images/";

  foreach ($display as $key => $value) {

    $place_Name=$value[0];
    $Introduction=$value[1];
    $pic_name=$value[2];
    $picDir=$value[3];
    $datetime=$value[4];

    echo "
      <tr>
        <td class='center'>
          <label class='pos-rel'>
            <input type='checkbox' class='ace' />
            <span class='lbl'></span>
          </label>
        </td>
        <td>
          $place_Name
        </td>

        <td>$Introduction</td>
        <td class='hidden-480 ace-thumbnails clearfix'>
          <a href='$picDir$pic_name'  data-rel='colorbox'>$pic_name</a>
        </td>
        <td>$datetime</td>

        <td></td>


        <td>
          <div class='hidden-sm hidden-xs action-buttons'>
            <a class='green' href='#edit' data-toggle='modal' onclick=Edit(\"$place_Name\",\"$Introduction\",\"$picDir\",\"$pic_name\")>
              <i class='ace-icon fa fa-pencil bigger-130'></i>
            </a>

            <a class='red' name='Delete'>
              <i class='ace-icon fa fa-trash-o bigger-130'></i>
              <input type='hidden' name='Deplace_name[]' value='$place_Name'>
            </a>
          </div>

          <div class='hidden-md hidden-lg'>
            <div class='inline pos-rel'>
              <button class='btn btn-minier btn-yellow dropdown-toggle' data-toggle='dropdown' data-position='auto'>
                <i class='ace-icon fa fa-caret-down icon-only bigger-120'></i>
              </button>

              <ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>

                <li>
                  <a href='#edit' class='tooltip-success' data-rel='tooltip' title='Edit'>
                    <span class='green'>
                      <i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
                    <span class='red'>
                      <i class='ace-icon fa fa-trash-o bigger-120'></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </td>
      </tr>

    ";

  }


  $db=null;

 ?>
