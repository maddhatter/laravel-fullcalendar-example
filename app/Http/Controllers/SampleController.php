<?php

namespace CalendarDemo\Http\Controllers;

use CalendarDemo\CalendarEvent;
use CalendarDemo\Http\Requests;
use Carbon\Carbon;

class SampleController extends Controller
{

    /**
     * @var CalendarEvent
     */
    private $calendarEvent;

    /**
     * @param CalendarEvent $calendarEvent
     */
    public function __construct(CalendarEvent $calendarEvent)
    {
        $this->calendarEvent = $calendarEvent;
    }

    public function calendar()
    {
        $staticEvent = \Calendar::event(
            'Today\'s Sample',
            true,
            Carbon::today()->setTime(0, 0),
            Carbon::today()->setTime(23, 59),
            null,
            [
                'color' => '#0F0',
                'url' => 'http://google.com',
            ]
        );

        $databaseEvents = $this->calendarEvent->all();

        $calendar = \Calendar::addEvent($staticEvent)->addEvents($databaseEvents);

        return view('calendar', compact('calendar'));
    }

}
