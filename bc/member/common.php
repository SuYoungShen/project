<?php

  function memberup(&$account, &$passowrd, &$email, &$name, &$datetime)
  {

    $memberup = "UPDATE member SET
                      account = '".$account."',
                      password = '".$passowrd."',
                      email = '".$email."',
                      name = '".$name."',
                      datetime = '".$datetime."'
                    WHERE
                      account = '".$account."'
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
