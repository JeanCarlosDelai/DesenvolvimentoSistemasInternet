<?php
    # Logout.php
    session_start();
    session_destroy();

    header('location:form.php?erro=3');