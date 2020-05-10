<?php
    session_start();
    $travellingArray = array(1,"test", array(1,array("another array", 34, 24342),3,"test_number_two"), 3,5,3,3,6,7,4);
    print_r($travellingArray);
    $serializedArray = serialize($travellingArray);
    $_SESSION['serializedArray'] = $serializedArray;
    echo "<p>Array values were serialized and sent to lab6_2.php</p>";