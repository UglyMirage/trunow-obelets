<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Стили 1 1 1 1 1 1 11 </title>
  <style type="text/css">
    H1 { font-size: 120%; font-family: Arial, Helvetica, sans-serif; color: green; }
  </style>
 </head>
 <body>
     <h1>Hello, world!</h1>
        <?php
            $name = @$_GET[name] ;
            
            $array = array(
                "mom" => "1",
                "dad" => "2",
                "grmom" => "3",
                "uncle" => "08.10.1979",
                "" => "",
                "" => "",
            ); 
            echo $array[$name] . '/n';
        ?>
 <input name = "name" type = "text">
  <H1 style="font-size: 36px; font-family: Times, serif; color: red;">Hello, world!</H1>
  <H1 style="font-variant: small-caps;">Hello, world!</H1>
 </body>
</html>