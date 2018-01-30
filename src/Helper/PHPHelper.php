<?php
namespace Helper;

class PHPHelper
{
	/**
	*/
	public static function duration2MS($duration = 0)
    {

        if (!is_numeric($duration)) {
            return "00:00";
        }

        if ($duration <= 0) {
            return "00:00";
        }

        if ($duration > 60) {
            $minute = intval($duration / 60);
            $second = $duration % 60;
            $time = $minute . ":" . gmstrftime('%S', $second);
        } else {
            $time = gmstrftime('%M:%S', $duration);
        }

        return $time;
    }
}

?>