<?php
require_once __DIR__ . '/functions.php';
/**session_start();
if (isset($_POST['q1'])) {
    $_SESSION['answers'][0] = $_POST['q1'];
}
if (isset($_POST['q2'])) {
    $_SESSION['answers'][1] = $_POST['q2'];
}
if (isset($_POST['q3'])) {
    $_SESSION['answers'][2] = $_POST['q3'];
}
var_dump($_SESSION['answers']);
**/
   $ot = 0;
   $not = 0;
      if ($_POST['q1'] === $_POST['correct_answer']){$ot++;} else {$not++;}
      if ($_POST['q2'] === $_POST['correct_answer']){$ot++;} else {$not++;}
      if ($_POST['q3'] === $_POST['correct_answer']){$ot++;} else {$not++;}

    $result = $ot/3 * 100;
    $name = $_POST['name'];
    echo $name;

    header("Location: certificate.php?name=$name&result=$result");
   
?>  

    <!--p>Правильных ответов: <?php echo $ot; ?></p>
    <p>Неправильных ответов:<?php echo $not; ?></p>
    <nav>
    <ul>
        <li><a href="list.php">Список тестов</a></li>
        <li><a href="certificate.php">Получить сертификат</a></li>
    </ul>
</nav-->