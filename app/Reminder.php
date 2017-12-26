<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
	protected $fillable = [
		'body',
		'frequency',
		'day',
		'date',
		'time',
		'expression',
		'run_once',
	];

	public function getFrequencyAttribute($value)
	{
		return array_get(HelpDate::frequencies(), $value);
	}

	public function getDayAttribute($value)
	{
		return array_get(HelpDate::days(), $value);
	}
	public function getDateAttribute($value)
	{
		return HelpDate::ordinal($value);
	}
}
