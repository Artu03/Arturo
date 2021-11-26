<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;#import model
class NombreController extends Controller

{
    function addData(Request $request)
    {
        $registration = new Registro();
        $registration->username = $request->username;
        $registration->password =$request->password;
        $registration->save();
        return redirect ('formulario');
    }

}
