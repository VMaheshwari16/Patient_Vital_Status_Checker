<?php

function checkTemperature($vital) {
    $value = $vital['value'];

    if ($value > 99) {
        $vital['status'] = "HIGH";
        $vital['message'] = "Fever detected";
    } elseif ($value < 97) {
        $vital['status'] = "LOW";
        $vital['message'] = "Low body temperature";
    } else {
        $vital['status'] = "NORMAL";
        $vital['message'] = "Temperature normal";
    }

    return $vital;
}

function checkPulse($vital) {
    $value = $vital['value'];

    if ($value > 100) {
        $vital['status'] = "HIGH";
        $vital['message'] = "Pulse rate high";
    } elseif ($value < 60) {
        $vital['status'] = "LOW";
        $vital['message'] = "Pulse rate low";
    } else {
        $vital['status'] = "NORMAL";
        $vital['message'] = "Pulse normal";
    }

    return $vital;
}

function checkBloodPressure($vital) {
    list($sys, $dia) = explode("/", $vital['value']);

    if ($sys > 120 || $dia > 80) {
        $vital['status'] = "HIGH";
        $vital['message'] = "Blood Pressure high";
    } elseif ($sys < 90 || $dia < 60) {
        $vital['status'] = "LOW";
        $vital['message'] = "Blood Pressure low";
    } else {
        $vital['status'] = "NORMAL";
        $vital['message'] = "Blood Pressure normal";
    }

    return $vital;
}

?>

