<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function create(){
        return view ('doctors.create');
    }
    public function insert(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors',
            'password' => 'required|string|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
            'major_id' => 'required|exists:majors,id',
        ]);

        $imagePath = $request->file('image')->store('images','public');

        Doctor::create([
            'name' => $request->name,
            'city' => $request->city,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $request->image,
            'major_id' => $request->major_id,
        ]);
        return redirect()->route('doctor.create')->with("Success", 'Doctor created successfully');
    }
}