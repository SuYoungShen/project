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

  function PlaceDe($viewpoint)
  {
    $PlaceDe ="DELETE FROM `place`
                      WHERE viewpoint=
                                  '".$viewpoint."'
                                  ";
    return $PlaceDe;
  }

  function ViewSe(){
    $viewSe = "SELECT * From `view`";
    return $viewSe;
  }

  function ViewUp($viewpoint,$pic_name,$picPath,$datetime,$i)
  {
    $ViewUp ="UPDATE `view`
                        SET
                        `viewpoint`='".$viewpoint."',
                        `picname`='".$pic_name."',
                        `path`='".$picPath."',
                        `datetime`='".$datetime."'
                        WHERE id='".$i."';
    ";
    return $ViewUp;
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
