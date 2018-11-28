<?php
    $month = date('n');
    $year = date('Y');
    $dayCount = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    echo $dayCount;
?>