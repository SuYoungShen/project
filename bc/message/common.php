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

  function AreaUp($posted, $message, $reply, $datetime)
  {

      $AreaUp ="UPDATE `area` SET
                                `reply`='".$reply."',
                                `datetime`='".$datetime."'
                                WHERE `posted`='".$posted."' && `message`='".$message."'
                ";

    return $AreaUp;
  }

  function AreaDe($message)
  {

    $AreaDe = "DELETE FROM `area`
                            WHERE
                            `message`= '$message'
                            ";

    return $AreaDe;
  }

  function AreaIn($posted, $email, $site, $message, $datetime)
  {

      $AreaIn ="INSERT INTO `area`(
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

    return $AreaIn;
  }

  function AreaSe()
  {
    $AreaSe = "SELECT * From area ORDER BY datetime DESC";

    return $AreaSe;
  }

  function ForumSe()
  {
    $ForumSe = "SELECT * From forum ORDER BY datetime DESC";

    return $ForumSe;
  }

  // function ForumIn($themes, $posteds, $emails){
  //   $ForumIn = "INSERT INTO `forum`(
  //                                   `theme`,
  //                                   `posted`,
  //                                   `email`
  //                                 ) VALUES (
  //                                   '".$themes."',
  //                                   '".$posteds."',
  //                                   '".$emails."'
  //                                 )";
  //   return $ForumIn;
  // }
  function ForumIn($themes, $posteds, $emails, $messages, $datetimes){
    $ForumIn = "INSERT INTO `forum`(
                                    `theme`,
                                    `posted`,
                                    `email`,
                                    `message`,
                                    `datetime`
                                  ) VALUES (
                                    '".$themes."',
                                    '".$posteds."',
                                    '".$emails."',
                                    '".$messages."',
                                    '".$datetimes."'
                                  )";
    return $ForumIn;
  }


 ?>
