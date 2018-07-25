<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public function index() 
    {
        $events = []; 

        foreach (\App\TimeProject::all() as $timeproject) { 
           $crudFieldValue = $timeproject->getOriginal('created_at'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $timeproject->name; 
           $prefix         = 'Project Created - '; 
           $suffix         = ''; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('admin.timeprojects.edit', $timeproject->id)
           ]; 
        } 


       return view('admin.calendar' , compact('events')); 
    }

}
