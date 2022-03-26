<?php
$MRN = array("AYA#30105_249" => "Accepted", "OSA_18371$423" => "Not Accepted");
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $mrn = $_GET['mrn'];
    $result = array_key_exists($mrn, $MRN);
    if ($result) {

    } else {
        echo "No";
    }
}
