<?php
    require_once 'model.inc/Cursus.php';
    require_once 'dao.inc/CursusDao.php';
    
    if(isset($_GET['noCarte'])) {
        $noCarte = $_GET['noCarte'];
    }
    $cursusDao = CursusDao::getInstance();
    $cursuss = $cursusDao->liste($noCarte);