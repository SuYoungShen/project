<?php
  function message($value,$basename){
    echo "
      <script>
        var value = '$value';
        var basename = '$basename';
        alerts(value,basename);
      </script>
    ";
  }
  function AreaUp($placename)
  {

      $AreaUp ="UPDATE `area` SET
                                `placename`='".$placename."'
                                WHERE message='1'
                ";

    return $AreaUp;
  }

  function AreaSe()
  {
    $AreaSe = "SELECT * From area";

    return $AreaSe;
  }

  function ForumSe()
  {
    $forumSe = "SELECT * From forum";

    return $forumSe;
  }

  function memberInsert($account ,$password ,$email ,$name ,$datetime)
  {

    $memberin ="INSERT INTO `member`
                            (
                              `account`,
                              `password`,
                              `email`,
                              `name`,
                              `datetime`
                            )
                            VALUES
                            (
                              '$account',
                              '$password',
                              '$email',
                              '$name',
                              '$datetime'
                            )";

    return $memberin;
  }

  function memberDelete($account){

    $memberDelete = "DELETE FROM `member`
                            WHERE
                            `account`= '$account'
                            ";

    return $memberDelete;
  }




 ?>
