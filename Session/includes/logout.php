<?php

include_once 'userSession.php';



    $userSession = new UserSession();
    $userSession->closerSession();
    
    header("Location:../index.php");

