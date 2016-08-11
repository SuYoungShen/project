<?php

  function memberup(&$member6name, &$member6dir, &$date, &$key)
  {

    $memberup = "UPDATE member SET
                      name = '".$member6name."',
                      path = '".$member6dir."',
                      datetime = '".$date."'
                    WHERE
                      id = '".$key."'
                    ";

    return $memberup;
  }

  function memberse()
  {
    $memberse = "SELECT * From member";

    return $memberse;
  }

  function memberin($account ,$password ,$email ,$name ,$datetime)
  {

    $memberin ="INSERT INTO `member`
                            (
                              `account`,
                              `password`,
                              `emai`,
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
  // function memberin()
  // {
  //
  //   $memberin ="INSERT INTO `member`
  //                           (
  //                             `account`,
  //                             `password`,
  //                             `emai`,
  //                             `name`,
  //                             `datetime`
  //                           )
  //                           VALUES
  //                           (
  //                             '$b',
  //                             1,
  //                             1,
  //                             1,
  //                             1
  //                           )";
  //   return $memberin;
  // }
 ?>
