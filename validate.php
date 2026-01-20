<?php

function validateVital($vital, $ruleFunction) {
    return $ruleFunction($vital);
}

?>