<?php
  include 'mysql/connect.php';

  $placeSe = $db->query(PlaceSe());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "about/place/images/";

  if (isset($_POST["placeName"]) && isset($_POST["Introduction"])) {

    $place_Name = $_POST["placeName"];
    $Introduction = $_POST["Introduction"];

    if(isset($_FILES["picName"])){
      foreach($_FILES["picName"]["tmp_name"] as $key => $value){//檔案以陣列方式接收

        $error = $_FILES["picName"]["error"][$key];//取得錯誤碼

        if ($error == 4) {

          message("照片還沒傳",$Basename);

        }else if ($error == 0) {

          $pic_Name = $_FILES["picName"]["name"][$key];//檔案名稱
          $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//抓取檔案
          $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
          $pic_tmps = strrchr($pic_Name,".");//取得檔案的副檔名
          $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
          , '.bmp', '.gif');//設定副檔名

          if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名

            $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
            message($pictmp,$Basename);
            break;

          }else if($pic_size > 2097152){//檢查檔案大小

            $picsize = basename($pic_Name,"$pic_tmps");
            message($picsize."檔案已超過2MB",$Basename);

            break;
          }//$pic_size

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          if(file_exists($picDir.$pic_Name)){//檢查是否有相同檔案

            $picName = basename($pic_Name,"$pic_tmps");//去除副檔名,留檔名
            message("資料夾裡已有名稱".$picName."的檔案",$Basename);

          }else{

            move_uploaded_file($pic_tmp,$picDir.$pic_Name);//把檔案移到指定dir
            $placeIn = PlaceIn($place_Name,$Introduction ,$pic_Name ,$picDir, $datetime);//更新檔名
            $true = $db->query($placeIn);//執行更新指令
            if ($true) {
              message("新增成功",$Basename);
            }else {
              message("新增失敗",$Basename);
            }
          }//else
        }//$error == 0
      }//foreach
    }//$_FILES["picName"]
  }//isset($_POST["placeName"])

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
          <a href='#'>$place_Name</a>
        </td>

        <td>$Introduction</td>
        <td class='hidden-480 ace-thumbnails clearfix'>
          <a href='$picDir$pic_name'  data-rel='colorbox'>3,330</a>
        </td>
        <td>$datetime</td>

        <td></td>


        <td>
          <div class='hidden-sm hidden-xs action-buttons'>

            <a class='green' href='#edit' data-toggle='modal'>
              <i class='ace-icon fa fa-pencil bigger-130'></i>
            </a>

            <a class='red' href='#'>
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


  // <tr>
  //   <td class="center">
  //     <label class="pos-rel">
  //       <input type="checkbox" class="ace" />
  //       <span class="lbl"></span>
  //     </label>
  //   </td>
  //   <td>
  //     <a href="#">app.com</a>
  //   </td>
  //
  //   <td>$45</td>
  //   <td class="hidden-480 ace-thumbnails clearfix">
  //     <a href="assets/images/gallery/image-1.jpg"  data-rel="colorbox">3,330</a>
  //   </td>
  //   <td>Feb 12</td>
  //
  //   <td class="hidden-480">
  //     <span class="label label-sm label-warning">Expiring</span>
  //   </td>
  //
  //   <td>
  //     <div class="hidden-sm hidden-xs action-buttons">
  //       <a class="blue" href="#">
  //         <i class="ace-icon fa fa-search-plus bigger-130"></i>
  //       </a>
  //
  //       <a class="green" href="#">
  //         <i class="ace-icon fa fa-pencil bigger-130"></i>
  //       </a>
  //
  //       <a class="red" href="#">
  //         <i class="ace-icon fa fa-trash-o bigger-130"></i>
  //       </a>
  //     </div>
  //
  //     <div class="hidden-md hidden-lg">
  //       <div class="inline pos-rel">
  //         <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
  //           <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
  //         </button>
  //
  //         <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
  //           <li>
  //             <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
  //               <span class="blue">
  //                 <i class="ace-icon fa fa-search-plus bigger-120"></i>
  //               </span>
  //             </a>
  //           </li>
  //
  //           <li>
  //             <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
  //               <span class="green">
  //                 <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
  //               </span>
  //             </a>
  //           </li>
  //
  //           <li>
  //             <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
  //               <span class="red">
  //                 <i class="ace-icon fa fa-trash-o bigger-120"></i>
  //               </span>
  //             </a>
  //           </li>
  //         </ul>
  //       </div>
  //     </div>
  //   </td>
  // </tr>
  //
  //


  $db=null;

 ?>
<!--
  <tr>
    <td class="center">
      <label class="pos-rel">
        <input type="checkbox" class="ace" />
        <span class="lbl"></span>
      </label>
    </td>

    <td>
      <a href="#">base.com</a>
    </td>
    <td>$35</td>
    <td class="hidden-480">2,595</td>
    <td>Feb 18</td>

    <td class="hidden-480">
      <span class="label label-sm label-success">Registered</span>
    </td>

    <td>
      <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#">
          <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>

        <a class="green" href="#">
          <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>

        <a class="red" href="#">
          <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
      </div>

      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
          </button>

          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                <span class="blue">
                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                <span class="green">
                  <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                <span class="red">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </td>
  </tr>

  <tr>
    <td class="center">
      <label class="pos-rel">
        <input type="checkbox" class="ace" />
        <span class="lbl"></span>
      </label>
    </td>

    <td>
      <a href="#">max.com</a>
    </td>
    <td>$60</td>
    <td class="hidden-480">4,400</td>
    <td>Mar 11</td>

    <td class="hidden-480">
      <span class="label label-sm label-warning">Expiring</span>
    </td>

    <td>
      <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#">
          <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>

        <a class="green" href="#">
          <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>

        <a class="red" href="#">
          <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
      </div>

      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
          </button>

          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                <span class="blue">
                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                <span class="green">
                  <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                <span class="red">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </td>
  </tr>

  <tr>
    <td class="center">
      <label class="pos-rel">
        <input type="checkbox" class="ace" />
        <span class="lbl"></span>
      </label>
    </td>

    <td>
      <a href="#">best.com</a>
    </td>
    <td>$75</td>
    <td class="hidden-480">6,500</td>
    <td>Apr 03</td>

    <td class="hidden-480">
      <span class="label label-sm label-inverse arrowed-in">Flagged</span>
    </td>

    <td>
      <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#">
          <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>

        <a class="green" href="#">
          <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>

        <a class="red" href="#">
          <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
      </div>

      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
          </button>

          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                <span class="blue">
                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                <span class="green">
                  <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                <span class="red">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </td>
  </tr>

  <tr>
    <td class="center">
      <label class="pos-rel">
        <input type="checkbox" class="ace" />
        <span class="lbl"></span>
      </label>
    </td>

    <td>
      <a href="#">pro.com</a>
    </td>
    <td>$55</td>
    <td class="hidden-480">4,250</td>
    <td>Jan 21</td>

    <td class="hidden-480">
      <span class="label label-sm label-success">Registered</span>
    </td>

    <td>
      <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#">
          <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>

        <a class="green" href="#">
          <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>

        <a class="red" href="#">
          <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
      </div>

      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
          </button>

          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                <span class="blue">
                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                <span class="green">
                  <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                <span class="red">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </td>
  </tr>

  <tr>
    <td class="center">
      <label class="pos-rel">
        <input type="checkbox" class="ace" />
        <span class="lbl"></span>
      </label>
    </td>

    <td>
      <a href="#">team.com</a>
    </td>
    <td>$40</td>
    <td class="hidden-480">3,200</td>
    <td>Feb 09</td>

    <td class="hidden-480">
      <span class="label label-sm label-inverse arrowed-in">Flagged</span>
    </td>

    <td>
      <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#">
          <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>

        <a class="green" href="#">
          <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>

        <a class="red" href="#">
          <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
      </div>

      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
          </button>

          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                <span class="blue">
                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                <span class="green">
                  <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                <span class="red">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </td>
  </tr>

  <tr>
    <td class="center">
      <label class="pos-rel">
        <input type="checkbox" class="ace" />
        <span class="lbl"></span>
      </label>
    </td>

    <td>
      <a href="#">up.com</a>
    </td>
    <td>$95</td>
    <td class="hidden-480">8,520</td>
    <td>Feb 22</td>

    <td class="hidden-480">
      <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
    </td>

    <td>
      <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#">
          <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>

        <a class="green" href="#">
          <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>

        <a class="red" href="#">
          <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
      </div>

      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
          </button>

          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                <span class="blue">
                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                <span class="green">
                  <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                <span class="red">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </td>
  </tr>

  <tr>
    <td class="center">
      <label class="pos-rel">
        <input type="checkbox" class="ace" />
        <span class="lbl"></span>
      </label>
    </td>

    <td>
      <a href="#">once.com</a>
    </td>
    <td>$20</td>
    <td class="hidden-480">1,400</td>
    <td>Apr 04</td>

    <td class="hidden-480">
      <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
    </td>

    <td>
      <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#">
          <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>

        <a class="green" href="#">
          <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>

        <a class="red" href="#">
          <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
      </div>

      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
          </button>

          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                <span class="blue">
                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                <span class="green">
                  <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                <span class="red">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </td>
  </tr>
 -->
