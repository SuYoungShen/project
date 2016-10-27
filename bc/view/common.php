<?php

  function Place(){
    $place = "SELECT place From `place`";
    return $place;
  }

  function PlaceSe(){
    $placeSe = "SELECT * From `places` ORDER BY datetime desc";
    return $placeSe;
  }

  function PlaceUp($id,$placeName,$viewpoint,$attractions,$arrival,$pic_name,$picPath,$datetime){

    $placeUp="UPDATE `places`
                            SET
                            `place`='$placeName',
                            `viewpoint`='$viewpoint',
                            `attractions`='$attractions',
                            `arrival`='$arrival',
                            `name`='$pic_name',
                            `path`='$picPath',
                            `datetime`='$datetime'
                            WHERE `id`='$id'
                            ";

    return $placeUp;
  }

  function PlaceUps($id,$placeName,$viewpoint,$attractions,$arrival,$datetime){

    $placeUp="UPDATE `places`
                            SET
                            `place`='$placeName',
                            `viewpoint`='$viewpoint',
                            `attractions`='$attractions',
                            `arrival`='$arrival',
                            `datetime`='$datetime'
                            WHERE `id`='$id'
                            ";

    return $placeUp;
  }

  function PlaceIn($placeName,$viewpoint,$attractions,$arrival,$pic_name,$picPath,$datetime)
  {
    $placeIn ="INSERT INTO `places`
                          (`place`,`viewpoint`,`attractions`,`arrival`,`name`,`path`,`datetime`)
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

  function PlaceIns($placeName,$viewpoint,$attractions,$arrival,$datetime)
  {
    $placeIn ="INSERT INTO `places`
                          (`place`,`viewpoint`,`attractions`,`arrival`,`datetime`)
                          VALUES
                          (
                            '$placeName',
                            '$viewpoint',
                            '$attractions',
                            '$arrival',
                            '$datetime'
                          )";
    return $placeIn;
  }

  function PlaceDe($id)
  {
    $PlaceDe ="DELETE FROM `places`
                      WHERE id='".$id."'
                      ";
    return $PlaceDe;
  }

  function ViewSe(){
    $viewSe = "SELECT * From `view`";
    return $viewSe;
  }

  function ViewUp($viewpoint,$pic_name,$picPath,$datetime,$id)
  {
    $ViewUp ="UPDATE `view`
                        SET
                        `viewpoint`='".$viewpoint."',
                        `picname`='".$pic_name."',
                        `path`='".$picPath."',
                        `datetime`='".$datetime."'
                        WHERE id='".$id."';
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
