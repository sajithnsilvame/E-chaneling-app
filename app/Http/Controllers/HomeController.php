<?php

namespace App\Http\Controllers;

use App\Models\Drug;

use App\Models\User;

use App\Models\Doctor;

use App\Models\MyDoctors;

use App\Models\My_Doctors;

use Barryvdh\DomPDF\Facade\Pdf as PDF;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $doc_list = Doctor::all();
        return view('normal_users.home', compact('doc_list'));
    }

    // go to my doctor page
    public function my_doctors()
    {   
        if(Auth::id()){
            $auth_id = Auth::id();
            $my_doctor_list = MyDoctors::where('user_id', '=', $auth_id)->get();
            return view('normal_users.pages.my-doctors', compact('my_doctor_list'));
        }
        else{
            return redirect('login');
        }
        
    }

    // go to appointment page
    public function appointment()
    {   
        if(Auth::id()){
            $auth_id = Auth::id();
            $appointment_data = Appointment::where('user_id', '=', $auth_id)->get();

            //dump($appointment_data);
            return view('normal_users.pages.appointment', compact('appointment_data'));
        }
        else{
            return redirect('login');
        }
        
    }

    // go to pharmacy page
    public function pharmacy()
    {   
        if(Auth::id()){
            $drugs = Drug::all();
            return view('normal_users.pages.pharmacy',compact('drugs'));
        }
        else{
            return redirect('login');
        }
        
    }

    // go to contact page
    public function contact_us()
    {
        if (Auth::id()) {
            return view('normal_users.contact');
        } else {
            return redirect('login');
        }
    }

    // go to make an appointment form
    public function book_appointment($id){
        if(Auth::id()){
            $doc = Doctor::find($id);
            //dump($doctor);
            return view('normal_users.appointment_form',compact('doc'));
        } else {
            return redirect('login');
        }
    }

    // make an appointment
    public function confirm_appointment(Request $req, $id){

        if (Auth::id()) {
            $appointment_data = new Appointment();
            $user = Auth::User();
            $doctor = Doctor::find($id);

            $appointment_data->user_id = $user->id;
            $appointment_data->name = $req->name;
            $appointment_data->age = $req->age;
            $appointment_data->contact = $req->contact;
            $appointment_data->date = $req->date;
            $appointment_data->doc_name = $doctor->name;

            //dump($appointment_data);

            $appointment_data->save();
            return redirect()->back()->with('message', 'Appointment Successful!');
            
        } else {
            return redirect('login');
        }
    }

    // delete appointment
    public function delete_appointment($id){
        $appointment_data = Appointment::find($id);
        //dump($appointment_data);
        $appointment_data->delete();

        return redirect()->back();
    }

    // add to my doctor
    public function add_to_mydoctor($id){

        if(Auth::id()){
            
            $user = Auth::User();
            $userID = $user->id;
            $doctor = Doctor::find($id);

            $doctor_is_exist = MyDoctors::where('doc_id', '=', $id)->where('user_id', '=', $userID)->get('id')->first();

            if($doctor_is_exist != null){

                return redirect()->back()->with('message', 'This doctor is already exist in your favorite list');
            }
            else{

                $my_doctor = new MyDoctors();
                $my_doctor->user_id = $user->id;
                $my_doctor->user_name = $user->name;
                $my_doctor->email = $user->email;

                $my_doctor->doc_id = $doctor->id;
                $my_doctor->doc_name = $doctor->name;
                $my_doctor->specielization = $doctor->specialization;
                $my_doctor->description = $doctor->description;
                $my_doctor->image = $doctor->image;

                $my_doctor->save();
                return redirect()->back();
            }
            
            
        }
        else{
            return redirect('login');
        }


    }

    // remove from my doctor
    public function remove_Doctor($id){

        if(Auth::id()){

            $my_doctor = MyDoctors::find($id);
            $my_doctor->delete();

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }

    // download prescription 
    public function download_precription($id){
        if(Auth::id()){
            $prescription = Appointment::find($id);
            $pdf = PDF::loadView('normal_users.pdf', compact('prescription'));
            return $pdf->download('prescription.pdf');
        }
        else{
            return redirect('login');
        }
    }
}
