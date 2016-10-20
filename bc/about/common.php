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

  function AboutIn($AboutIn,$datetime)
  {
    $AboutIn ="INSERT INTO `about`
                          (`about`,`datetime`)
                          VALUES
                          (
                            '".$AboutIn."',
                            '".$datetime."'
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

  function CarouselSe()
  {
    $carousel = "SELECT * From `carousel`";
    return $carousel;
  }

  function CarouselUp(&$carousel_name, &$carouselDir, &$datetime, &$key)
  {

    $topup = "UPDATE carousel SET
                      name = '".$carousel_name."',
                      path = '".$carouselDir."',
                      datetime = '".$datetime."'
                    WHERE
                      id = '".$key."'
                    ";
    return $topup;
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


  function PlaceSe(){
    $placeSe = "SELECT * From `place` ORDER BY datetime DESC";
    return $placeSe;
  }

  function PlaceUp($place, $Introduction, $name, $path, $time){

    $placeUp="UPDATE `place` SET

                            `Introduction`='".$Introduction."',
                            `name`='".$name."',
                            `path`='".$path."',
                            `datetime`='".$time."'
                            WHERE `place`='".$place."'
                            ";
    return $placeUp;
  }

  function PlaceUps($id, $place, $Introduction, $time){

    $placeUp="UPDATE `place` SET
                             `place`='".$place."',
                            `Introduction`='".$Introduction."',
                            `datetime`='".$time."'
                            WHERE `id`='".$id."'
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
