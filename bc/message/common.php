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
                                `placename`='".$placename."',
                                `viewpoint`='".$viewpoint."',
                                `posted`='".$posted."',
                                `reply`='".$reply."',
                                `email`='".$email."',
                                `site`='".$site."',
                                `datetime`='".$datetime."'
                                WHERE message='1'
                ";

    return $AreaUp;
  }

  function AreaIn($posted, $email, $site, $message, $datetime)
  {

      $AreaUp ="INSERT INTO `area`(
                                    `posted`,
                                    `message`,
                                    `email`,
                                    `site`,
                                    `datetime`

                                  )VALUES (
                                  '".$posted."',
                                  '".$email."',
                                  '".$site."',
                                  '".$message."',
                                  '".$datetime."'
                                  )";

    return $AreaUp;
  }

  function AreaSe()
  {
    $AreaSe = "SELECT * From area ORDER BY datetime DESC";

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
