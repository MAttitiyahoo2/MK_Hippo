<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Request $request)
    {
        $name = $request->input('name');
        $species = $request->input('species');
        $color = $request->input('color');
        $dob = $request->input('dob');
        $owner_id = $request->input('owner_id', -1);

        $patient = new Patient;
        $patient->name = $name;
        $patient->species = $species;
        $patient->color = $color;
        $patient->dob = $dob;
        $patient->owner_id = $owner_id;
        $patient->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public static function destroy($id)
    {
        Patient::where('id', $id)->delete();
    }
}
