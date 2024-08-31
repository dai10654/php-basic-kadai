<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_011</title>
</head>
<body>
<p>
  <?php
  $yasais =[
    'id' => 1,
    '名前' => '侍太郎',
    '年齢' => 30];
    foreach ($yasais as $key => $value){
    echo "{$key}:{$value} <br>";
    }
    ?>
</p>  

</body>
</html>