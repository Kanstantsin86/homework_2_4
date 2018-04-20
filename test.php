<?php

$test_dir = "./Tests/test";
$test_id = $test_dir.$_GET["id"].".json";
$json_file = file_get_contents($test_id);
$json_array = json_decode($json_file, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="list.php">Список тестов</a></li>
    </ul>
</nav>

<form action="result.php" method="POST" enctype="multipart/form-data">
<div>
    <h1><?php echo $json_array[0]['question']?></h1>
    <?php foreach ($json_array[0]['answers'] as $values) { ?>
    <label><input name="q1" type="radio"><?php echo $values; ?></label>
    <input type="hidden" name="correct_answer">
    <?php } ?>
</div>
<div>
    <h1><?php echo $json_array[1]['question']?></h1>
    <?php foreach ($json_array[1]['answers'] as $values) { ?>
    <label><input name="q2" type="radio"><?php echo $values; ?></label>
    <input type="hidden" name="correct_answer">
    <?php } ?>
</div>
<div>
    <h1><?php echo $json_array[2]['question']?></h1>
    <?php foreach ($json_array[2]['answers'] as $values) { ?>
    <label><input name="q3" type="radio"><?php echo $values; ?></label>
    <input type="hidden" name="correct_answer">
    <?php } ?>
</div>
    <!--p><b>Ваше имя (на английском):</b><br>
    <input type="text" size="40" name="name">
    </p-->
<button type="submit">Результат</button>

</form>

</body>
</html>