<?php
$a0 = 0;
$b0 = 0;
$a1 = 1;
$b1 = 1;
$true = true;
$false = false;
$negativeOne = -1;
$strOne = '1';
$null = null;
$strPHP = 'PHP';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>PHP table</title>
</head>

<body>
<div class="wrapper">
  <div class="oneTable">
  <p class="titleBlock">Задание 1. Таблица сравнения</p>
<div class="table-responsive"> 
<table class="table table-hover table-bordered caption-top">
  <caption>Таблица истинности PHP</caption>
    <thead>
      <tr class="table-dark">
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">A!B</th>
        <th scope="col">A||B</th>
        <th scope="col">A && B</th>
        <th scope="col">A xor B</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $a0; ?></th>
        <th scope="row"><?= $b0; ?></th>
        <td><?php var_export($a0 != $b0); ?></td>
        <td><?php var_export($a0 || $b0); ?></td>
        <td><?php var_export($a0 && $b0); ?></td>
        <td><?php var_export($a0 xor $b0); ?></td>
      </tr>
      <tr>
        <th scope="row"><?= $a0; ?></th>
        <th scope="row"><?= $b1; ?></th>
        <td><?php var_export($a0 != $b1); ?></td>
        <td><?php var_export($a0 || $b1); ?></td>
        <td><?php var_export($a0 && $b1); ?></td>
        <td><?php var_export($a0 xor $b1); ?></td>
      </tr>
      <tr>
        <th scope="row"><?= $a1; ?></th>
        <th scope="row"><?= $b0; ?></th>
        <td><?php var_export($a1 != $b0); ?></td>
        <td><?php var_export($a1 || $b0); ?></td>
        <td><?php var_export($a1 && $b0); ?></td>
        <td><?php var_export($a1 xor $b0); ?></td>
      </tr>
      <tr>
        <th scope="row"><?= $a1; ?></th>
        <th scope="row"><?= $b1; ?></th>
        <td><?php var_export($a1 != $b1); ?></td>
        <td><?php var_export($a1 || $b1); ?></td>
        <td><?php var_export($a1 && $b1); ?></td>
        <td><?php var_export($a1 xor $b1); ?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<div class="twoTable">
<p class="titleBlock">Задание 2. Таблица сравнения</p>

<div class="table-responsive"> 
<table class="table table-hover table-bordered caption-top">
  <caption>Гибкое сравнение в PHP</caption>
    <thead>
      <tr class="table-dark">
        <th scope="col"></th>
        <th scope="col">true</th>
        <th scope="col">false</th>
        <th scope="col">1</th>
        <th scope="col">0</th>
        <th scope="col">-1</th>
        <th scope="col">"1"</th>
        <th scope="col">null</th>
        <th scope="col">"PHP"</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="table-dark" scope="row">true</th>
        <td><?php var_export($true == $true); ?></td>
        <td><?php var_export($true == $false); ?></td>
        <td><?php var_export($true == $a1); ?></td>
        <td><?php var_export($true == $a0); ?></td>
        <td><?php var_export($true == $negativeOne); ?></td>
        <td><?php var_export($true == $strOne); ?></td>
        <td><?php var_export($true == $null); ?></td>
        <td><?php var_export($true == $strPHP); ?></td>
      </tr>
      <tr>
      <th scope="row" class="table-dark">false</th>
      <td><?php var_export($false == $true); ?></td>
        <td><?php var_export($false == $false); ?></td>
        <td><?php var_export($false == $a1); ?></td>
        <td><?php var_export($false == $a0); ?></td>
        <td><?php var_export($false == $negativeOne); ?></td>
        <td><?php var_export($false == $strOne); ?></td>
        <td><?php var_export($false == $null); ?></td>
        <td><?php var_export($false == $strPHP); ?></td>
      </tr>
      <tr>
      <th scope="row" class="table-dark">1</th>
      <td><?php var_export($a1 == $true); ?></td>
        <td><?php var_export($a1 == $false); ?></td>
        <td><?php var_export($a1 == $a1); ?></td>
        <td><?php var_export($a1 == $a0); ?></td>
        <td><?php var_export($a1 == $negativeOne); ?></td>
        <td><?php var_export($a1 == $strOne); ?></td>
        <td><?php var_export($a1 == $null); ?></td>
        <td><?php var_export($a1 == $strPHP); ?></td>
      </tr>
      <tr>
      <th scope="row" class="table-dark">0</th>
      <td><?php var_export($a0 == $true); ?></td>
        <td><?php var_export($a0 == $false); ?></td>
        <td><?php var_export($a0 == $a1); ?></td>
        <td><?php var_export($a0 == $a0); ?></td>
        <td><?php var_export($a0 == $negativeOne); ?></td>
        <td><?php var_export($a0 == $strOne); ?></td>
        <td><?php var_export($a0 == $null); ?></td>
        <td><?php var_export($a0 == $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">-1</th>
      <td><?php var_export($negativeOne == $true); ?></td>
        <td><?php var_export($negativeOne == $false); ?></td>
        <td><?php var_export($negativeOne == $a1); ?></td>
        <td><?php var_export($negativeOne == $a0); ?></td>
        <td><?php var_export($negativeOne == $negativeOne); ?></td>
        <td><?php var_export($negativeOne == $strOne); ?></td>
        <td><?php var_export($negativeOne == $null); ?></td>
        <td><?php var_export($negativeOne == $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">"1"</th>
      <td><?php var_export($strOne == $true); ?></td>
        <td><?php var_export($strOne == $false); ?></td>
        <td><?php var_export($strOne == $a1); ?></td>
        <td><?php var_export($strOne == $a0); ?></td>
        <td><?php var_export($strOne == $negativeOne); ?></td>
        <td><?php var_export($strOne == $strOne); ?></td>
        <td><?php var_export($strOne == $null); ?></td>
        <td><?php var_export($strOne == $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">null</th>
      <td><?php var_export($null == $true); ?></td>
        <td><?php var_export($null == $false); ?></td>
        <td><?php var_export($null == $a1); ?></td>
        <td><?php var_export($null == $a0); ?></td>
        <td><?php var_export($null == $negativeOne); ?></td>
        <td><?php var_export($null == $strOne); ?></td>
        <td><?php var_export($null == $null); ?></td>
        <td><?php var_export($null == $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">"PHP"</th>
      <td><?php var_export($strPHP == $true); ?></td>
        <td><?php var_export($strPHP == $false); ?></td>
        <td><?php var_export($strPHP == $a1); ?></td>
        <td><?php var_export($strPHP == $a0); ?></td>
        <td><?php var_export($strPHP == $negativeOne); ?></td>
        <td><?php var_export($strPHP == $strOne); ?></td>
        <td><?php var_export($strPHP == $null); ?></td>
        <td><?php var_export($strPHP == $strPHP); ?></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="table-responsive"> 
<table class="table table-hover table-bordered caption-top">
  <caption>Жёсткое сравнение в PHP</caption>
    <thead>
      <tr class="table-dark">
        <th scope="col"></th>
        <th scope="col">true</th>
        <th scope="col">false</th>
        <th scope="col">1</th>
        <th scope="col">0</th>
        <th scope="col">-1</th>
        <th scope="col">"1"</th>
        <th scope="col">null</th>
        <th scope="col">"PHP"</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="table-dark" scope="row">true</th>
        <td><?php var_export($true === $true); ?></td>
        <td><?php var_export($true === $false); ?></td>
        <td><?php var_export($true === $a1); ?></td>
        <td><?php var_export($true === $a0); ?></td>
        <td><?php var_export($true === $negativeOne); ?></td>
        <td><?php var_export($true === $strOne); ?></td>
        <td><?php var_export($true === $null); ?></td>
        <td><?php var_export($true === $strPHP); ?></td>
      </tr>
      <tr>
      <th scope="row" class="table-dark">false</th>
      <td><?php var_export($false === $true); ?></td>
        <td><?php var_export($false === $false); ?></td>
        <td><?php var_export($false === $a1); ?></td>
        <td><?php var_export($false === $a0); ?></td>
        <td><?php var_export($false === $negativeOne); ?></td>
        <td><?php var_export($false === $strOne); ?></td>
        <td><?php var_export($false === $null); ?></td>
        <td><?php var_export($false === $strPHP); ?></td>
      </tr>
      <tr>
      <th scope="row" class="table-dark">1</th>
      <td><?php var_export($a1 === $true); ?></td>
        <td><?php var_export($a1 === $false); ?></td>
        <td><?php var_export($a1 === $a1); ?></td>
        <td><?php var_export($a1 === $a0); ?></td>
        <td><?php var_export($a1 === $negativeOne); ?></td>
        <td><?php var_export($a1 === $strOne); ?></td>
        <td><?php var_export($a1 === $null); ?></td>
        <td><?php var_export($a1 === $strPHP); ?></td>
      </tr>
      <tr>
      <th scope="row" class="table-dark">0</th>
      <td><?php var_export($a0 === $true); ?></td>
        <td><?php var_export($a0 === $false); ?></td>
        <td><?php var_export($a0 === $a1); ?></td>
        <td><?php var_export($a0 === $a0); ?></td>
        <td><?php var_export($a0 === $negativeOne); ?></td>
        <td><?php var_export($a0 === $strOne); ?></td>
        <td><?php var_export($a0 === $null); ?></td>
        <td><?php var_export($a0 === $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">-1</th>
      <td><?php var_export($negativeOne === $true); ?></td>
        <td><?php var_export($negativeOne === $false); ?></td>
        <td><?php var_export($negativeOne === $a1); ?></td>
        <td><?php var_export($negativeOne === $a0); ?></td>
        <td><?php var_export($negativeOne === $negativeOne); ?></td>
        <td><?php var_export($negativeOne === $strOne); ?></td>
        <td><?php var_export($negativeOne === $null); ?></td>
        <td><?php var_export($negativeOne === $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">"1"</th>
      <td><?php var_export($strOne === $true); ?></td>
        <td><?php var_export($strOne === $false); ?></td>
        <td><?php var_export($strOne === $a1); ?></td>
        <td><?php var_export($strOne === $a0); ?></td>
        <td><?php var_export($strOne === $negativeOne); ?></td>
        <td><?php var_export($strOne === $strOne); ?></td>
        <td><?php var_export($strOne === $null); ?></td>
        <td><?php var_export($strOne === $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">null</th>
      <td><?php var_export($null === $true); ?></td>
        <td><?php var_export($null === $false); ?></td>
        <td><?php var_export($null === $a1); ?></td>
        <td><?php var_export($null === $a0); ?></td>
        <td><?php var_export($null === $negativeOne); ?></td>
        <td><?php var_export($null === $strOne); ?></td>
        <td><?php var_export($null === $null); ?></td>
        <td><?php var_export($null === $strPHP); ?></td>
      </tr>
      <th scope="row" class="table-dark">"PHP"</th>
      <td><?php var_export($strPHP === $true); ?></td>
        <td><?php var_export($strPHP === $false); ?></td>
        <td><?php var_export($strPHP === $a1); ?></td>
        <td><?php var_export($strPHP === $a0); ?></td>
        <td><?php var_export($strPHP === $negativeOne); ?></td>
        <td><?php var_export($strPHP === $strOne); ?></td>
        <td><?php var_export($strPHP === $null); ?></td>
        <td><?php var_export($strPHP === $strPHP); ?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div class="conclusionsContainer">
  <p class="titleBlock">Выводы о сравнении в PHP</p>
  <article class="conclusions">
      <p>PHP – динамически типизированный язык, это означает, что по умолчанию нет необходимости указывать тип переменной, так как он будет определён во время выполнения. Однако можно статически типизировать некоторые аспекты языка, используя декларации типов.</p>
      <p>
        В ряде случаев, например при сравнении некоторых типов переменных, необходимо приводить типы к ожидаемым перед сравнением для получения корректного результата.
      </p>
      <p>
        В случае если работа идёт не с константой или значение переменной не задано, а данные получены из форм html или другим путем, необходимо необходимо определять типы полученных данных, проводить проверку и приводить их к необходимым. Для этого в языке PHP существует ряд встроенных функций. 
      </p>
      <p>
        Как и в ряде других языков с динамической типизацией, в PHP есть "Жёсткое" и "Гибкое" сравнение, возвращаемые результаты сравнения при выполнении могут быть различны.  
      </p>
  </article>
</div>
</div>
</body>

</html>