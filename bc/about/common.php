<?php

  function AboutUp(&$top6name, &$top6dir, &$date, &$key)
  {

    $topup = "UPDATE top SET
                      name = '".$top6name."',
                      path = '".$top6dir."',
                      datetime = '".$date."'
                    WHERE
                      id = '".$key."'
                    ";
    return $topup;
  }

  function AboutSe()
  {
    $about = "SELECT * From `about`";
    return $about;
  }

  function AboutIn($AboutIn)
  {
    $AboutIn ="INSERT INTO `about`
                          (`about`)
                          VALUES
                          (
                            '".$AboutIn."'
                          )";
    return $AboutIn;
  }

  function AboutDe($AboutDe)
  {
    $AboutDe ="DELETE FROM `about`
                      WHERE about=
                                  '".$AboutDe."'
                                  ";
    return $AboutDe;
  }

 ?>
