<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />

<script src="https://use.fontawesome.com/6a71565c22.js"></script>

<link rel="stylesheet" href="css/portal.css" />

</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Alexander Malloy SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
      <!-- <li><a href="IT162/index.php" class="selected">Welcome</a></li>
      <li><a href="IT162/big/index.php">Big</a></li>
      <li><a href="IT162/aia.php">AIA</a></li>
      <li><a href="IT162/flowchart.php">Flowchart/Layout</a></li>
      <li><a href="IT162/fp/index.php">Final Project</a></li>
      <li><a href="IT162/contact.php">Contact Alexander</a></li>  -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>