<?php
namespace Helper;

class PHPHelper
{
	/**
	*/
	public static function duration2Hms($duration = 0)
    {

        if (!is_numeric($duration)) {
            return "00:00";
        }

        if ($duration <= 0) {
            return "00:00";
        }

        if ($duration > 3600) {
            $hour = intval($duration / 3600);
            $second = $duration % 3600;
            $time = $hour . ":" . gmstrftime('%M:%S', $second);
        } else {
            $time = gmstrftime('%H:%M:%S', $duration);
        }

        return $time;
    }
}

?>