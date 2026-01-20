<?php
include "vitals.php";
include "validate.php";
include "rules.php";
include "scanner.php";

foreach ($vitals as $vital) {

    switch ($vital['vital_type']) {
        case "Temperature":
            $result = validateVital($vital, "checkTemperature");
            break;

        case "Pulse":
            $result = validateVital($vital, "checkPulse");
            break;

        case "BP":
            $result = validateVital($vital, "checkBloodPressure");
            break;
    }

    echo "Patient: {$result['patient_name']}<br>";
    echo "Vital: {$result['vital_type']}<br>";
    echo "Value: {$result['value']}<br>";
    echo "Status: {$result['status']}<br>";
    echo "Message: {$result['message']}<br><br>";
}

echo "-------------------------<br><br>";

scanFolder(__DIR__);

?>
