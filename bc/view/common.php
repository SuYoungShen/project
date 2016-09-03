<?php

  function PlaceSe(){
    $placeSe = "SELECT * From `place`";
    return $placeSe;
  }

  function PlaceUp(){

    $placeUp="UPDATE `place` SET
                            `place`=[value-1],
                            `Introduction`=[value-2],
                            `name`=[value-3],
                            `path`=[value-4],
                            `datetime`=[value-5]
                            WHERE 1
                            ";
    return $placeUp;
  }

  function PlaceIn($placeName,$Introduction,$pic_Name,$placeDir,$datetime)
  {
    $placeIn ="INSERT INTO `place`
                          (`place`,`Introduction`,`name`,`path`,`datetime`)
                          VALUES
                          (
                            '".$placeName."',
                            '".$Introduction."',
                            '".$pic_Name."',
                            '".$placeDir."',
                            '".$datetime."'
                          )";
    return $placeIn;
  }

  function PlaceDe($placeName)
  {
    $AboutDe ="DELETE FROM `place`
                      WHERE place=
                                  '".$placeName."'
                                  ";
    return $AboutDe;
  }


 ?>
