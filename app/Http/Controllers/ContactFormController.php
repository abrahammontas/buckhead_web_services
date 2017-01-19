<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use App\Calendar;
use Validator;

class ContactFormController extends Controller
{
    public function contactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::send('emails.contact', $request->all(), function($message) {
            $message->to('jboud1217@gmail.com');
            $message->subject('Message from website!');
        });

        return redirect("/#contact")->with('success', 'Email sent successfully!');
    }

    public function bookDate(Request $request) {

        $date = new \DateTime($request->date);

        $time = explode(":",$request->time);
        $date->setTime($time[0], $time[1]);

        $array = [
          'date' => $date->format('Y-m-d H:i:s'),
            'email' => $request->email
        ];

        $calendar = new Calendar;
        $calendar->date = $date->format('Y-m-d H:i:s');
        $calendar->email = $request->email;
        $calendar->save();

        if(isset($calendar->id)) {
            return response()->json(['message' => "Date reserved!", "class" => "alert alert-success"]);
        } else {
            return response()->json(['message' => "An error occurred please try again in a moment.",
                 "class" => "alert alert-danger"]);
        }
    }

    public function getTime($date) {

        $hours = [
            "09:00",
            "09:30",
            "10:00",
            "10:30",
            "11:00",
            "11:30",
            "12:00",
            "12:30",
            "13:00",
            "13:30",
            "14:00",
            "14:30",
            "15:00",
            "15:30",
            "16:00",
            "16:30"
        ];

        $date2 = date_create($date);
        date_add($date2, date_interval_create_from_date_string('1 days'));
        $date2 = date_format($date2, 'Y-m-d');

        $calendar = Calendar::whereBetween('date', array($date, $date2))->get();
        $array = [];

        foreach($calendar as $date) {
            $tmp = explode(' ', $date->date);
            $tmp = explode(':', $tmp[1]);

            $array[] = $tmp[0].":".$tmp[1];
        }

        $array = array_diff($hours, $array);

        return response()->json($array);

    }
}
