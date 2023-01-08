<html>
<head>
    <title>module_11_php_start</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$a_one = 0 ;
$b_one = 0;
$a_two = 0 ;
$b_two = 1;
$a_three = 1 ;
$b_three = 0;
$a_four = 1 ;
$b_four = 1;

$two_work_true = true;
$two_work_false = false;
$two_work_null = null;
$resultat = true;
?>
<!--1 задание-->
<section>
    <table>
        <caption><h2>1 задание</h2></caption>
        <tr>
            <th class="stolb">№ п/п</th>
            <th class="stolb">A</th>
            <th class="stolb">B</th>
            <th class="stolb">!A</th>
            <th class="stolb">A||B.</th>
            <th class="stolb">A && B</th>
            <th class="stolb">A xor B</th>
        </tr>
        <tr>
            <td class="stolb">1.</td>
            <td class="stolb"><?php echo $a_one ?></td>
            <td class="stolb"><?php echo $b_one ?></td>
            <td class="stolb"><?php var_dump(!$a_one) ?></td>
            <td class="stolb"><?php var_dump($a_one || $b_one) ?></td>
            <td class="stolb"><?php var_dump($a_one && $b_one) ?></td>
            <td class="stolb"><?php var_dump($a_one xor $b_one) ?></td>
        </tr>
        <tr>
            <td class="stolb">2.</td>
            <td class="stolb"><?php echo $a_two ?></td>
            <td class="stolb"><?php echo $b_two ?></td>
            <td class="stolb"><?php var_dump(!$a_two) ?></td>
            <td class="stolb"><?php var_dump($a_two || $b_two) ?></td>
            <td class="stolb"><?php var_dump($a_two && $b_two) ?></td>
            <td class="stolb"><?php var_dump($a_two xor $b_two) ?></td>
        </tr>
        <tr>
            <td class="stolb">3.</td>
            <td class="stolb"><?php echo $a_three ?></td>
            <td class="stolb"><?php echo $b_three ?></td>
            <td class="stolb"><?php var_dump(!$a_three) ?></td>
            <td class="stolb"><?php var_dump($a_three || $b_three) ?></td>
            <td class="stolb"><?php var_dump($a_three && $b_three) ?></td>
            <td class="stolb"><?php var_dump($a_three xor $b_three) ?></td>
        </tr>
        <tr>
            <td class="stolb">4.</td>
            <td class="stolb"><?php echo $a_four ?></td>
            <td class="stolb"><?php echo $b_four ?></td>
            <td class="stolb"><?php var_dump(!$a_four) ?></td>
            <td class="stolb"><?php var_dump($a_four || $b_four) ?></td>
            <td class="stolb"><?php var_dump($a_four && $b_four) ?></td>
            <td class="stolb"><?php var_dump($a_four xor $b_four) ?></td>
        </tr>

    </table>
</section>
<!--2 задание-->
<!--гибкое сравнение-->
<section>
    <table>
        <caption><h2>2.1 задание(гибкое  сравнение)</h2></caption>
        <tr>
            <th class="stolb"></th>
            <th class="stolb">true</th>
            <th class="stolb">false</th>
            <th class="stolb">1</th>
            <th class="stolb">0</th>
            <th class="stolb">-1</th>
            <th class="stolb">"1"</th>
            <th class="stolb">null</th>
            <th class="stolb">"php"</th>
        </tr>
        <!--true-->
        <tr>
            <td class="stolb">true</td>
            <td class="stolb"><?php $resultat = var_dump($two_work_true == $two_work_true) ?></td>
            <td class="stolb"><?php $resultat = var_dump($two_work_true == $two_work_false) ?></td>
            <td class="stolb"><?php $resultat = var_dump(1 == true)?></td>
            <td class="stolb"><?php $resultat = var_dump(0 == true) ?></td>
            <td class="stolb"><?php $resultat = var_dump(-1 == true) ?></td>
            <td class="stolb"><?php $resultat = var_dump("1" == true) ?></td>
            <td class="stolb"><?php $resultat = var_dump( $two_work_null == true) ?></td>
            <td class="stolb"><?php $resultat = var_dump("php" == true) ?></td>
        </tr>
        <!--false-->
        <tr>
            <td class="stolb">false</td>
            <td class="stolb"><?php var_dump($two_work_false == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump($two_work_false == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 == false)?></td>
            <td class="stolb"><?php var_dump(0 == false) ?></td>
            <td class="stolb"><?php var_dump(-1 == false) ?></td>
            <td class="stolb"><?php var_dump("1" == false) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null == false) ?></td>
            <td class="stolb"><?php var_dump("php" == false) ?></td>
        </tr>
        <!--1-->
        <tr>
            <td class="stolb">1</td>
            <td class="stolb"><?php var_dump(1 == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(1 == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 == 1)?></td>
            <td class="stolb"><?php var_dump(0 == 1) ?></td>
            <td class="stolb"><?php var_dump(-1 == 1) ?></td>
            <td class="stolb"><?php var_dump("1" == 1) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null == false) ?></td>
            <td class="stolb"><?php var_dump("php" == false) ?></td>
        </tr>
        <!--0-->
        <tr>
            <td class="stolb">0</td>
            <td class="stolb"><?php var_dump(0 == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(0 == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 == 0)?></td>
            <td class="stolb"><?php var_dump(0 == 0) ?></td>
            <td class="stolb"><?php var_dump(-1 == 0) ?></td>
            <td class="stolb"><?php var_dump("1" == 0) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null == 0) ?></td>
            <td class="stolb"><?php var_dump("php" == 0) ?></td>
        </tr>
        <!--(-1)-->
        <tr>
            <td class="stolb">-1</td>
            <td class="stolb"><?php var_dump(-1 == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(-1 == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 == -1)?></td>
            <td class="stolb"><?php var_dump(0 == -1) ?></td>
            <td class="stolb"><?php var_dump(-1 == -1) ?></td>
            <td class="stolb"><?php var_dump("1" == -1) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null == -1) ?></td>
            <td class="stolb"><?php var_dump("php" == -1) ?></td>
        </tr>
        <!--"1"-->
        <tr>
            <td class="stolb">-1</td>
            <td class="stolb"><?php var_dump("1" == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump("1" == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 == "1")?></td>
            <td class="stolb"><?php var_dump(0 == "1") ?></td>
            <td class="stolb"><?php var_dump(-1 == "1") ?></td>
            <td class="stolb"><?php var_dump("1" == "1") ?></td>
            <td class="stolb"><?php var_dump( $two_work_null == "1") ?></td>
            <td class="stolb"><?php var_dump("php" == "1") ?></td>
        </tr>
        <!--null-->
        <tr>
            <td class="stolb">null</td>
            <td class="stolb"><?php var_dump(null == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(null == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 == null)?></td>
            <td class="stolb"><?php var_dump(0 == null) ?></td>
            <td class="stolb"><?php var_dump(-1 == null) ?></td>
            <td class="stolb"><?php var_dump("1" == null) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null == null) ?></td>
            <td class="stolb"><?php var_dump("php" == null) ?></td>
        </tr>
        <tr>
            <td class="stolb">"php"</td>
            <td class="stolb"><?php var_dump("php" == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump("php" == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 == "php")?></td>
            <td class="stolb"><?php var_dump(0 == "php") ?></td>
            <td class="stolb"><?php var_dump(-1 == "php") ?></td>
            <td class="stolb"><?php var_dump("1" == "php") ?></td>
            <td class="stolb"><?php var_dump( $two_work_null == "php") ?></td>
            <td class="stolb"><?php var_dump("php" == "php") ?></td>
        </tr>
    </table>
</section>
<!--жеское сравнение-->
<section>
    <table>
        <caption><h2>2.2 задание(Жёсткое  сравнение)</h2></caption>
        <tr>
            <th class="stolb"></th>
            <th class="stolb">true</th>
            <th class="stolb">false</th>
            <th class="stolb">1</th>
            <th class="stolb">0</th>
            <th class="stolb">-1</th>
            <th class="stolb">"1"</th>
            <th class="stolb">null</th>
            <th class="stolb">"php"</th>
        </tr>
        <!--true-->
        <tr>
            <td class="stolb">true</td>
            <td class="stolb"><?php var_dump($two_work_true == $two_work_true) ?></td>
            <td class="stolb"><?php var_dump($two_work_true == $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === true)?></td>
            <td class="stolb"><?php var_dump(0 === true) ?></td>
            <td class="stolb"><?php var_dump(-1 === true) ?></td>
            <td class="stolb"><?php var_dump("1" === true) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === true) ?></td>
            <td class="stolb"><?php var_dump("php" === true) ?></td>
        </tr>
        <!--false-->
        <tr>
            <td class="stolb">false</td>
            <td class="stolb"><?php var_dump($two_work_false === $two_work_true) ?></td>
            <td class="stolb"><?php var_dump($two_work_false === $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === false)?></td>
            <td class="stolb"><?php var_dump(0 === false) ?></td>
            <td class="stolb"><?php var_dump(-1 === false) ?></td>
            <td class="stolb"><?php var_dump("1" === false) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === false) ?></td>
            <td class="stolb"><?php var_dump("php" === false) ?></td>
        </tr>
        <!--1-->
        <tr>
            <td class="stolb">1</td>
            <td class="stolb"><?php var_dump(1 === $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(1 === $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === 1)?></td>
            <td class="stolb"><?php var_dump(0 === 1) ?></td>
            <td class="stolb"><?php var_dump(-1 === 1) ?></td>
            <td class="stolb"><?php var_dump("1" === 1) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === false) ?></td>
            <td class="stolb"><?php var_dump("php" === false) ?></td>
        </tr>
        <!--0-->
        <tr>
            <td class="stolb">0</td>
            <td class="stolb"><?php var_dump(0 === $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(0 === $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === 0)?></td>
            <td class="stolb"><?php var_dump(0 === 0) ?></td>
            <td class="stolb"><?php var_dump(-1 === 0) ?></td>
            <td class="stolb"><?php var_dump("1" === 0) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === 0) ?></td>
            <td class="stolb"><?php var_dump("php" === 0) ?></td>
        </tr>
        <!--(-1)-->
        <tr>
            <td class="stolb">-1</td>
            <td class="stolb"><?php var_dump(-1 === $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(-1 === $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === -1)?></td>
            <td class="stolb"><?php var_dump(0 === -1) ?></td>
            <td class="stolb"><?php var_dump(-1 === -1) ?></td>
            <td class="stolb"><?php var_dump("1" === -1) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === -1) ?></td>
            <td class="stolb"><?php var_dump("php" === -1) ?></td>
        </tr>
        <!--"1"-->
        <tr>
            <td class="stolb">-1</td>
            <td class="stolb"><?php var_dump("1" === $two_work_true) ?></td>
            <td class="stolb"><?php var_dump("1" === $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === "1")?></td>
            <td class="stolb"><?php var_dump(0 === "1") ?></td>
            <td class="stolb"><?php var_dump(-1 === "1") ?></td>
            <td class="stolb"><?php var_dump("1" === "1") ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === "1") ?></td>
            <td class="stolb"><?php var_dump("php" === "1") ?></td>
        </tr>
        <!--null-->
        <tr>
            <td class="stolb">null</td>
            <td class="stolb"><?php var_dump(null === $two_work_true) ?></td>
            <td class="stolb"><?php var_dump(null === $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === null)?></td>
            <td class="stolb"><?php var_dump(0 === null) ?></td>
            <td class="stolb"><?php var_dump(-1 === null) ?></td>
            <td class="stolb"><?php var_dump("1" === null) ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === null) ?></td>
            <td class="stolb"><?php var_dump("php" === null) ?></td>
        </tr>
        <tr>
            <td class="stolb">"php"</td>
            <td class="stolb"><?php var_dump("php" === $two_work_true) ?></td>
            <td class="stolb"><?php var_dump("php" === $two_work_false) ?></td>
            <td class="stolb"><?php var_dump(1 === "php")?></td>
            <td class="stolb"><?php var_dump(0 === "php") ?></td>
            <td class="stolb"><?php var_dump(-1 === "php") ?></td>
            <td class="stolb"><?php var_dump("1" === "php") ?></td>
            <td class="stolb"><?php var_dump( $two_work_null === "php") ?></td>
            <td class="stolb"><?php var_dump("php" === "php") ?></td>
        </tr>
    </table>
</section>
</body>
</html>