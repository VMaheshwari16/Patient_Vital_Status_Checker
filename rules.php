<?php

function checkTemperature($vital) {
    $value = $vital['value'];

    if ($value > 100) {
        $vital['status'] = "HIGH";
        $vital['message'] = "Fever detected";
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
    } else {
        $vital['status'] = "NORMAL";
        $vital['message'] = "Blood Pressure normal";
    }

    return $vital;
}

?>
