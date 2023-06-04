<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentsController extends Controller
{
    public function index(){
        $appointments = Appointment::all();

        return view('appointments', ['appointments'=> $appointments]);
    }

    public function create(){
        return view('appointments.create');
    }

    public function store(){

        $appointment = new Appointment();
        $message = "";

        $first_name = request('first-name');
        $last_name = request('last-name');
        $email = request('email');
        $address = request('address');
        $phone_number = request('phone-number');
        $date = request('date');
        $slot = request('slot');

        $appointment->first_name = $first_name;
        $appointment->last_name= $last_name;
        $appointment->email_address=$email;
        $appointment->address=$address;
        $appointment->phone_number=$phone_number;
        $appointment->date=$date;
        $appointment->slot=$slot;

        $date_formatted = strtotime($date);

        $day = date('D', $date_formatted);

        error_log($day);

        $appointments = Appointment::all();
        $count = 0;

                for($i = 0; $i < count($appointments); $i++)
        {

                if($day === 'Sat' || $day === "Sun")
                {
                    return redirect('/appointments/create')->with('message', "We are closed on weekends!");
                }
        }

        for($i = 0; $i < count($appointments); $i++)
        {

                if(strval($appointments[$i]['date']) === strval($date))
                {
                    $count++;
                }
        }

        if($count === 7)
        {
            return redirect('/appointments/create')->with('message', "The day is already booked!");
        }

        for($i = 0; $i < count($appointments); $i++){
            if($appointments[$i]['first_name'] === $first_name && $appointments[$i]['last_name'] === $last_name)
            {
                return redirect('/appointments/create')->with('message', "You already made an appointment!");
            }
            else
            {
               if(strval($appointments[$i]['date']) === strval($date) && strval($appointments[$i]['slot']) === strval($slot))
                {
                    return redirect('/appointments/create')->with('message', "This hour slot is already picked!");
                }
            }

        }
        $appointment->save();
        error_log($appointment);
        return redirect("/goodbye");
    }

}
