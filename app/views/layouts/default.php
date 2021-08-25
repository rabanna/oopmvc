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
        <title>&#x2605; ::. <?=$pagetitle; ?> ... &#x2605;</title>

        
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
            img.img-responsive{
            width:100%;
            height:200px;

		
	    	}

            header{
            width:100% !important;
            margin-top:53px !important;
            
            
            }

            .w3-panel{
                margin-top:10px !important;
                border-radius:10%;
                border-color: #09C !important;
                background-color:#FFF !important;
                
                
                }
            .page-header{
                margin-top:10px !important;
                border-bottom-color:#06F !important;
                color:#09C !important;
                
                }
            .textOverImage{
                position:relative;
                width:100%;
                height:350px;
                float:left;
                margin:1px;
                background-size:100%;
                border-radius:10%;
                transition:0.5s;
                }
            .textOverImage:hover{
                background-size:110%;
                
                
                }
            .textOverImage:after{
                position:absolute;
                top:90%;
                bottom:0;
                left:0;
                right:0;
                white-space:pre-wrap;
                overflow:hidden;
                background-color:rgba(0,0,0,0.5);
                color:#FFF;
                padding:0 8px;
                content:attr(data-text);
                transition:0.5s;
                
                }
            .textOverImage:hover:after{
                top:0;
                padding:8px;
                background-color:rgba(0,0,0,0.5);
                border-radius:10%;
                }
            .textOverImage:first-line{
                color:#FFF;
                font-weight:bold;
                text-align:center;
                font-size:1.5em !important;
                
                }			
            hr {
                display: block;
                height: 1px;
                border: 0;
                border-top: 1px solid #09F;
                margin: 1em 0;
                padding: 0; 
            }

            .card{
                padding:15px;
                margin:5px;
                width:100%;
                height:200px;
                border-radius:100%;
                border-color:#30F !important;
                background: #FFF !important;
                color:#000;
                overflow: hidden;
                }
            .card:hover{
                background-size:110%;
                background-color:rgba(0,0,0,3);
                background: #CCCCCC !important;
                color:#FFF;

                }

            footer {
                    bottom:0px;
                    left: 0;
                    right: 0;
                    height:100%;   
                    background: #000;
                    /* get rid of min-width */
                    
                }	
            .links{
                    list-style:none;
                    display:inline-flex

                    }

            .links a{
                    color:white !important;
                    padding: 0px 10px;

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
   <?php $this->partial('partials/header'); ?>
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