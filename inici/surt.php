<?php
    session_start();
    
    if(session_destroy()) // Destroying All Sessions
    {
        header("Location: ../inicio.php"); // Redirecting To Home Page
    }
?>