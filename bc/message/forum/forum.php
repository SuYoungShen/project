<?php
  $dbname="project";
  include ("mysql/connect.php");
  include ("message/common.php");
  $forumSe = $db->query(ForumSe());
  $display = $forumSe->fetchAll();


  $db=null;
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
  <td>$35</td>
  <td class="hidden-480">2,595</td>
  <td>Feb 18</td>
  <td></td>

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
  <td>$60</td>
  <td class="hidden-480">4,400</td>
  <td>Mar 11</td>
<td></td>
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
