<?php 

  class Weather {
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celciusToFarenheit($c){
      return $c * 9 /5 +32;
    }

    public static function determineTempCondition($f){
      if($f < 40){
        return self::$tempConditions[0];
      } elseif($f <70){
        return self::$tempConditions[1];
      } else {
        return self::$tempConditions[2];
      }
    }

  }

  // $weatherInstance = new Weather();
  // print_r($weatherInstance->tempConditions);
    
  // print_r(Weather::$tempConditions);
  // echo Weather::celciusToFarenheit(20);
  echo Weather::determineTempCondition(20);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>