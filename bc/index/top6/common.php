<?php

  function topup(&$top6name, &$top6dir, &$date, &$key)
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

  function topse()
  {
    $topse = "SELECT * From top";
    return $topse;
  }

  function topin()
  {
    $topin ="INSERT INTO `top`
                          (`id`)
                          VALUES
                          (
                            [value-1],[value-2],[value-3],[value-4]
                          )";
  }

 ?>
