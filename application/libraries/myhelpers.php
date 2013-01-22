<?php
class MyHelpers {
	
	/*
	 * time_ago_in_words(date)
	 * =======================
	 * Takes a date argument and returns a string with time since date.
	 */
	public static function time_ago_in_words($date)
	{
		$time = strtotime($date);
			
		$periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$lengths = array("60","60","24","7","4.35","12","10");
		$now = time();
		
		$difference     = $now - $time;
		$tense         = "ago";
		
		for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
			$difference /= $lengths[$j];
		}
		
		$difference = round($difference);
		
		if($difference != 1) {
			$periods[$j].= "s";
		}
		
		return "$difference $periods[$j] ago ";
	}
	
}
