<?php
session_start();
include_once("helpers/db.php");
$page_title = "Dashboard";
include("inc/header.php");
if(!isset($_SESSION['username'])){
        header("Location: login.php");
     }
?>

<link rel="stylesheet" href="assets/css/custom.css">

</head>
<body class="text-center">
<?php include("inc/menu.php"); ?>
<div class="row">
    <div class="col-md-6">
        <h1>Dummy Content</h1>
    </div>
    <div class="col-md-6">
        <h1>Dummy Content</h1>
    </div>
</div>
<?php
include_once("inc/bootstrap.php");
include_once("inc/footer.php");
?>
