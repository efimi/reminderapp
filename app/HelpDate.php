<?php

namespace App;

class HelpDate 
{
	public static function frequencies()
	    {
	    	return [
	    		'daily' => 'Every Day',
	    		'weekly' => 'Every Week',
	    		'monthly' => 'Every Month',
	    	];
	    }    
	public static function days()
	{
		return [
			1 => 'Monday',
			2 => 'Tuesday',
			3 => 'Wednesday',
			4 => 'Thursday',
			5 => 'Friday',
			6 => 'Saturday',
			7 => 'Sunnday',
		];
	}
	public static function ordinal($value)
	{
		$ends = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];

        if ((($value % 100) >= 11) && (($value % 100) <= 13)) {
            return $value . 'th';
        }

        return $value . $ends[$value % 10];	
	}
}
