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

  function PlaceIn($placeName,$viewpoint,$attractions,$arrival,$pic_name,$picPath,$datetime)
  {
    $placeIn ="INSERT INTO `place`
                          (`place`,`viewpoint`,`attractions`,`arrival`,`picname`,`path`,`datetime`)
                          VALUES
                          (
                            '".$placeName."',
                            '".$viewpoint."',
                            '".$attractions."',
                            '".$arrival."',
                            '".$pic_name."',
                            '".$picPath."',
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
