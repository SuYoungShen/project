
<?php
  include("mysql/connect.php");
  include ("common.php");
  $memberse = $db->query(memberse());
  // if (isset($_POST["account"])) {
  //   if (is_null($_POST["account"])) {
  //   echo "string";
  // }else {
  //   echo "s";
  // }
  // }



  $member = isset($_POST["account"]) &&
            isset($_POST["password"]) &&
            isset($_POST["email"]) &&
            isset($_POST["name"]);

  if ($member) {

    $account = $_POST["account"];//抓取帳號
    $password = $_POST["password"];//抓取密碼
    $email = $_POST["email"];//抓取email
    $name = $_POST["name"];//抓取會員名字
    date_default_timezone_set('Asia/Taipei');//設定時間為台北
    $datetime = date("Y-m-d H:i:s");//時間
    
    if(isset($_POST["up"])){
      $memberup = memberin($account ,$password ,$email ,$name ,$datetime);//上傳會員資料

    }
    // $test = array($account,$password,$email,$name);

    $memberin = memberin($account ,$password ,$email ,$name ,$datetime);//上傳會員資料
    $db->query($memberin);
    $basename = basename($_SERVER["PHP_SELF"]);
    echo "
          <script>
            var value='送出成功';
            var basename='$basename';
            alerts(value, basename)
          </script>
    ";
  }
foreach ($memberse as $key => $value) {
  $accounts = $value[0];
  $passwords = $value[1];
  $emails = $value[2];
  $names = $value[3];
  $datetimes = $value[4];

  echo "
  <tr>
    <td class='center'>
      <label class='pos-rel'>
        <input type='checkbox' class='ace' />
        <span class='lbl'></span>
      </label>
    </td>

    <td>
      <a href='#'>$accounts</a>
    </td>
    <td>$passwords</td>
    <td class='hidden-480'>$emails</td>
    <td>$emails</td>
    <td class='hidden-480'>
      <span class='label label-sm label-warning'>$datetimes</span>
    </td>

    <td>
      <div class='hidden-sm hidden-xs action-buttons'>
        <a class='blue' href='#'>
          <i class='ace-icon fa fa-search-plus bigger-130'></i>
        </a>

        <a class='green'  href='#edit' data-toggle='modal'>
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
                  <i class='ace-icon fa fa-trash-o bigger-120' ></i>
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

 ?>


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

      <a class="green" href="#edit" data-toggle="modal">
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
    <a href="#">view.com</a>
  </td>
  <td>$45</td>
  <td class="hidden-480">4,100</td>
  <td>Mar 12</td>

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
    <a href="#">nice.com</a>
  </td>
  <td>$38</td>
  <td class="hidden-480">3,940</td>
  <td>Feb 12</td>

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
    <a href="#">fine.com</a>
  </td>
  <td>$25</td>
  <td class="hidden-480">2,983</td>
  <td>Apr 01</td>

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
    <a href="#">good.com</a>
  </td>
  <td>$50</td>
  <td class="hidden-480">6,500</td>
  <td>Feb 02</td>

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
    <a href="#">great.com</a>
  </td>
  <td>$55</td>
  <td class="hidden-480">6,400</td>
  <td>Feb 24</td>

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
    <a href="#">shine.com</a>
  </td>
  <td>$25</td>
  <td class="hidden-480">2,200</td>
  <td>Apr 01</td>

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
    <a href="#">rise.com</a>
  </td>
  <td>$42</td>
  <td class="hidden-480">3,900</td>
  <td>Feb 01</td>

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
    <a href="#">above.com</a>
  </td>
  <td>$35</td>
  <td class="hidden-480">3,420</td>
  <td>Mar 12</td>

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
    <a href="#">share.com</a>
  </td>
  <td>$30</td>
  <td class="hidden-480">3,200</td>
  <td>Feb 11</td>

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
    <a href="#">fair.com</a>
  </td>
  <td>$35</td>
  <td class="hidden-480">3,900</td>
  <td>Mar 26</td>

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
    <a href="#">year.com</a>
  </td>
  <td>$48</td>
  <td class="hidden-480">3,990</td>
  <td>Feb 15</td>

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
    <a href="#">day.com</a>
  </td>
  <td>$55</td>
  <td class="hidden-480">5,600</td>
  <td>Jan 29</td>

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
    <a href="#">light.com</a>
  </td>
  <td>$40</td>
  <td class="hidden-480">3,100</td>
  <td>Feb 17</td>

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
    <a href="#">sight.com</a>
  </td>
  <td>$58</td>
  <td class="hidden-480">6,100</td>
  <td>Feb 19</td>

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
    <a href="#">right.com</a>
  </td>
  <td>$50</td>
  <td class="hidden-480">4,400</td>
  <td>Apr 01</td>

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
<?php
  $db = null;
 ?>
