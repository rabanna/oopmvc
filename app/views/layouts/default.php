<?php use Core\Config; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Fav icon  -->
        <link rel="icon" href="<?=ROOT?>app/uploads/logo-icon3.png" sizes="32x32" type="image/x-icon">

            <!-- Font Awesome -->
        <link rel="stylesheet" href="<?=ROOT?>app/css/all.css">

            <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
            
        <!-- Bootstrap core CSS -->
        <link href="<?=ROOT?>app/css/bootstrap.min.css" rel="stylesheet">

            <!-- w3 STYLE -->
        <link href="<?=ROOT?>app/css/w3.css" rel="stylesheet">

            <!-- Material Design Bootstrap -->
        <link href="<?=ROOT?>app/css/mdb.min.css" rel="stylesheet">

            <!-- CUSTOMER STYLE -->
        <link href="<?=ROOT?>app/css/style.css" rel="stylesheet">

   </head>
<body class="w3-light-grey">
<div class="container-fluid p-4">
    <?php $this->content('content'); ?>

</div>
    

            <!-- JQuery -->
        <script type="text/javascript" src="<?=ROOT?>app/js/jquery.min.js"></script>

            <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?=ROOT?>app/js/bootstrap-tooltip.js"></script>

            <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?=ROOT?>app/js/bootstrap.min.js"></script>

            <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?=ROOT?>app/js/mdb.min.js"></script>

</body>
</html>