<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Doctor;

use App\Models\Appointment;
use App\Models\MyDoctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function add_doctor_Interface(){

        return view('admin.add_doctor');
    }

    public function view_all_doctors()
    {
        if(Auth::id()){
            $doctors = Doctor::all();
           
            return view('admin.view_all_doctors',compact('doctors'));
        }
        else{
            return redirect('login');
        }
    }

    public function save_doc_data(Request $req){

        if(Auth::id()){
            $data = new Doctor();
            $data->name = $req->name;
            $data->contact = $req->mobile_number;
            $data->specialization = $req->specialization;
            $data->description = $req->description;

            $image = $req->image;
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $req->image->move('profile_pic', $image_name);
            $data->image = $image_name;

            $data->save();

            return redirect()->back()->with('message', 'Record Added successfully!');
        }
    }

    public function goto_edit_doctor($id){
        if(Auth::id()){
            $doc_info = Doctor::find($id);
            
            return view('admin.edit',compact('doc_info'));
        }
        else{
            return redirect('login');
        }
    }

    public function save_edit_data(Request $req, $id){
        if(Auth::id()){

            $update_doctor_data = Doctor::find($id);

            $update_doctor_data->name = $req->name;
            $update_doctor_data->contact = $req->mobile_number;
            $update_doctor_data->specialization = $req->specialization;
            $update_doctor_data->description = $req->description;

            $image = $req->image;
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $req->image->move('profile_pic', $image_name);
            $update_doctor_data->image = $image_name;

            $update_doctor_data->save();
            // dump($update_doctor_data);

            return redirect()->back()->with('message', 'Record updated successfully!');
        }
        else{
            return redirect('login');
        }
    }

    public function delete_doctor($id){
        if(Auth::id()){
            $doctor = Doctor::find($id);
            $my_doclist = MyDoctors::where('doc_id', '=', $id);

            if($my_doclist != null){
                return redirect()->back();
            }
            else{
                $my_doclist->delete();
            }

            $doctor->delete();
            

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }

    public function view_all_appoinments(){
        if(Auth::id()){
            $appointment_data = Appointment::all();
            return view('admin.appointments', compact('appointment_data'));
            
        }else{
            return redirect('login');
        }
    }

    public function save_drug_data(Request $req)
    {

        if (Auth::id()) {
            $drug_data = new Drug();
            $drug_data->name = $req->drug_name;
            $drug_data->price = $req->drug_price;

            //dump($drug_data);
            $drug_data->save();

            $drugs = Drug::all();
            return view('admin.drugs', compact('drugs'));
        } else {
            return redirect('login');
        }
    }

    public function view_all_drugs(){
        if(Auth::id()){
            
            $drugs = Drug::all();
            return view('admin.drugs', compact('drugs'));
        }else{
            return redirect('login');
        }
    }

    
}
