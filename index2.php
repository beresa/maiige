<?php

function dateFormat($date, $pattern = "MMMM d. EEEE")
{
    date_default_timezone_set('Europe/Budapest');
    if ($date == '' )
    {
        $date = new DateTime();
    }
    else
    {
        $date = strtotime($date);
    }

    $formatter = new IntlDateFormatter(
        'hu_HU',
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE
    );
    $formatter->setPattern($pattern);

    return $formatter->format($date);
}

// echo strftime("%Y. %B %e. %H:%M:%S", strtotime(date("Y-F-d h:m:s")));
//
// echo "<br>";
//
// echo date_default_timezone_get();
// echo "<br>";
//
echo dateFormat('', "Y. MMMM d. HH:mm:ss");
// echo "<br>";
