<?php
  include ("../bc/mysql/connect.php");
  $true = isset($_POST["account"]) &&
          !empty($_POST["account"]);

  if ($true) {

    $account = $_POST["account"];
    $trues = $db->query(
                        Insert(
                          $account
                        )
                      );
    if ($trues) {
      echo "成功";
    }
  }

  function Insert($account){
    $favorite = "INSERT INTO `favorite`(
                                        `Account`
                                      ) VALUES (
                                        '".$account."'
                                      )";
    return $favorite;
  }
  $db=null;
 ?>
