<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    
    function index() {

        $majors = Major::get();
        return view('major.index',compact('majors'));
    }

    function destroy($id) {
        $major = Major::find($id);
        $major->delete();
        return redirect('/majors');
    }

}
