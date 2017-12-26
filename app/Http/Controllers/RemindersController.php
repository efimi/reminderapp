<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;

class RemindersController extends Controller
{
    //
    public function index()
    {
    	$reminders = Reminder::latest()->get();
    	return view('reminders', compact('reminders'));
    }
}
