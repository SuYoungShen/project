<?php

  function PlaceSe(){
    $placeSe = "SELECT * From `place`";
    return $placeSe;
  }

  function PlaceUp($placeName,$viewpoint,$attractions,$arrival,$pic_name,$picPath,$datetime){

    $placeUp="UPDATE `place`
                            SET
                            `place`='$placeName',
                            `viewpoint`='$viewpoint',
                            `attractions`='$attractions',
                            `arrival`='$arrival',
                            `picname`='$pic_name',
                            `path`='$picPath',
                            `datetime`='$datetime'
                            WHERE 1
                            ";

    return $placeUp;
  }

  function PlaceIn($placeName,$viewpoint,$attractions,$arrival,$pic_name,$picPath,$datetime)
  {
    $placeIn ="INSERT INTO `place`
                          (`place`,`viewpoint`,`attractions`,`arrival`,`picname`,`path`,`datetime`)
                          VALUES
                          (
                            '$placeName',
                            '$viewpoint',
                            '$attractions',
                            '$arrival',
                            '$pic_name',
                            '$picPath',
                            '$datetime'
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

  function message($value, $Basename){
    echo "
    <script>
      var value ='$value';
      var basename= '$Basename';
      alerts(value, basename);
    </script>
    ";
  }
 ?>
