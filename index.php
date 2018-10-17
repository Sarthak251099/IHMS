<?php
$page_title = "First page";
include("inc/header.php")
?>
</head>
<body>
<h1>Hello, this page is <?php echo $page_title?></h1>
    
<?php
    phpinfo();
include_once("inc/bootstrap.php");
include_once("inc/footer.php");

?>
