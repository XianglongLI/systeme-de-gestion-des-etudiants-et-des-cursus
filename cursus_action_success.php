<?php
    require_once './verification.php';
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        switch($action) {
            case "add" :
                $str = "ajouté";
                break;
            case "edit" :
                $str = "modifié";
                break;
            case "delete" :
                $str = "supprimé";
                break;
        }
    }
    if(isset($_GET['noCarte'])) {
        $noCarte = $_GET['noCarte'];
    }
    if(isset($_GET['nom'])) {
        $nom = $_GET['nom'];
    }
    if(isset($_GET['prenom'])) {
        $prenom = $_GET['prenom'];
    }
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Management de cursus</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <script>
    	setTimeout(function() {
    		window.location.href = '<?php echo "cursus_list?noCarte=$noCarte&nom=$nom&prenom=$prenom" ?>';
    	}, 5000);
    	
    	setInterval(function() {
			$('#timer').html($('#timer').html() - 1);
	}, 1000);
    </script>
</head>
<body>      
    <div id="wrapper">
        <?php
            include './navbar_top.php';
            include './navbar_side.php';
        ?>
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>SUCCES! </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class='alert alert-success' role='alert'>
                    Un cursus est <?php echo $str; ?>.
                </div>
                <div class="alert alert-warning" role="alert">retourner à la liste dans <span id="timer">5</span>s</div>
                <a href="<?php echo "cursus_list?noCarte=$noCarte&nom=$nom&prenom=$prenom" ?>">retourner à la liste maintenant</a>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
