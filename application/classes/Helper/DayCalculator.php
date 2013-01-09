<?php

class Helper_DayCalculator
{
    public static function CalculateDays()
    {
        $days = array();
        $day_interval = 0;

        for($i = 0; $i < 7; ++$i)
        {
            $day = Date('l', strtotime('+'.$day_interval.' days'));
            $days[$day] = Date('Y-m-d', strtotime('+'.$day_interval.' days'));
            $day_interval++;
        }

        reset($days);
        
        return $days;
    }
}

?>
