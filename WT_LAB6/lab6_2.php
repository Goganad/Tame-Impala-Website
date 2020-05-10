<?php
    session_start();
    if (isset($_SESSION['serializedArray'])){
        echo "<p>Array was received</p>";
        $serializedArray = $_SESSION['serializedArray'];
        $travellingArray = unserialize($serializedArray);
        print_r($travellingArray);
    } else {
        echo "<p>Array wasn't received</p>";
    }
