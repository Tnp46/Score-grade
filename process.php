<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stlyes.css">
  <title>grade</title>
</head> 
<body>
<nav>
   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

$score = $_POST['score'];
echo "grade :" ;
  if($score <= 50){
    echo "F";
  }elseif($score<=60){
    echo "D";
  }elseif($score<=70){
    echo "C";
  }elseif($score<=80){
    echo "B";
  }else{
    echo "A";
  }
}
?>
</nav>

</body>
</html>


