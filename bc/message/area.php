<?php
  // $dbname="project";
  include ("mysql/connect.php");
  include ("common.php");

  $AreaSe = $db->query(AreaSe());//搜尋
  $Display = $AreaSe->fetchAll();//顯示

  foreach ($Display as $key => $value) {

    $placename = $placenames[$key] = $value[0];//地區名
    $viewpoint = $viewpoints[$key] = $value[1];//景點名
    $posted = $posteds[$key] = $value[2];//發表人
    $message = $messages[$key] = $value[3];//留言
    $reply = $replys[$key] = $value[4];//回覆
    $email = $emails[$key] = $value[5];//email
    $site = $sites[$key] = $value[6];//網址
    $datetime = $datetimes[$key] = $value[7];//時間

    echo "
      <tr>
        <td class='center'>
          <label class='pos-rel'>
            <input type='checkbox' class='ace' value='".$messages[$key]."'/>
            <span class='lbl'></span>
          </label>
        </td>

        <td>
          <a href='#'>$placename</a>
        </td>
        <td>$viewpoint</td>
        <td class='hidden-480'>$posted</td>
        <td>$message</td>
        <td>$reply</td>
        <td>$email</td>
        <td>$site</td>
        <td class='hidden-480'>
          <span class='label label-sm label-success'>$datetime</span>
        </td>

        <td>
          <div class='hidden-sm hidden-xs action-buttons'>

            <a class='green' href='#reply' data-toggle='modal'
              onclick='Edit(
                            \"$placenames[$key]\",
                            \"$viewpoints[$key]\",
                            \"$posteds[$key]\",
                            \"$messages[$key]\",
                            \"$replys[$key]\",
                            \"$emails[$key]\",
                            \"$sites[$key]\",
                            \"$datetimes[$key]\"
                            )'>
              <i class='ace-icon fa fa-pencil bigger-130'></i>
            </a>

            <a class='red' onclick='bootboxs(
                                \"$posteds[$key]\",
                                \"$messages[$key]\",
                                \"$datetimes[$key]\"
                                )'>
              <i class='ace-icon fa fa-trash-o bigger-130'></i>
            </a>
          </div>

          <div class='hidden-md hidden-lg'>
            <div class='inline pos-rel'>
              <button class='btn btn-minier btn-yellow dropdown-toggle' data-toggle='dropdown' data-position='auto'>
                <i class='ace-icon fa fa-caret-down icon-only bigger-120'></i>
              </button>

              <ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>
                <li>
                  <a href='#' class='tooltip-info' data-rel='tooltip' title='View'>
                    <span class='blue'>
                      <i class='ace-icon fa fa-search-plus bigger-120'></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href='#' class='tooltip-success' data-rel='tooltip' title='Edit'>
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
 