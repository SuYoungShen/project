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

  function carouselSe()
  {
    $carousel = "SELECT * From `carousel`";
    return $carousel;
  }

  function carouselUp(&$carousel_name, &$carouselDir, &$datetime, &$key)
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

  function message($value, $carouselBasename){
    echo "
    <script>
      var value ='$value';
      var basename= '$carouselBasename';
      alerts(value, basename);
    </script>
    ";
  }
 ?>
