<?php use Core\Config; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Ethuto an educational website">
        <meta name="keywords" content="Ethuto, an educational website">
        <meta name="author" content="Ethuto development team, Rabanna, Phole, Mathe, Kasale, Nnete and Unaswi">

               <!-- web site title-->
        <title>&#x2605; ::. <?=$this->getSiteTitle(); ?> ... &#x2605;</title>

        
                <!-- Fav icon  -->
        <link rel="icon" href="<?=ROOT?>app/uploads/logo-icon3.png" sizes="32x32" type="image/x-icon">

                <!-- Font Awesome -->
       
                <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
            
        
                <!-- Bootstrap Styling sheet-->
        <link rel="stylesheet" href="<?=ROOT?>app/css/bootstrap.css">
        
                <!-- w3 Styling sheet-->
        <link rel="stylesheet" href="<?=ROOT?>app/css/w3.css">
        
                <!-- Custom css-->
        <link rel="stylesheet" href="<?=ROOT?>app/css/mdb.min.css">
        
                <!-- Custom css-->
        <link rel="stylesheet" href="<?=ROOT?>app/css/style.css">

         <!-- html5shiv and respond Script for internet explorer 9-->
  
        <!--[if lt IE 9]>
            <script src="<?=ROOT?>app/js/html5shiv.js"></script>
            <script src="<?=ROOT?>app/js/respond.min.js"></script>
        <![endif]-->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
            }

                footer {
                    bottom:0px;
                    left: 0;
                    right: 0;
                    height:90px;   
                    background: #000;
                    /* get rid of min-width */
                    
                }	
                .links{
                    padding-top:15px;
                    margin-right:10px;
                    list-style:none;
                    color:white !important;

                    }
                .link{
                    padding-top:0px;
                    margin-right:40px;
                    list-style:none;
                    margin-top:inherit;
                    color:#FFFFFF;
                    
                }    
        </style>

   </head>
<body class="w3-light-grey">

     <?php $this->partial('partials/mainMenu'); ?>

<div class="container-fluid p-4">
    
    <?php $this->content('content'); ?>

</div>
    

            <!-- JQuery -->
        <script type="text/javascript" src="<?=ROOT?>app/js/jquery-3.2.1.min.js"></script>

            <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?=ROOT?>app/js/bootstrap.min.js"></script>

        <?php $this->partial('partials/mainFooter'); ?>         
</body>
</html>