<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Patient;
use App\Models\Insurance;
use App\Models\Gender;
use App\Models\Diagnosis;
use App\Models\MaritalSituation;
use App\Models\Payment;
use Barryvdh\Debugbar\Facades\Debugbar;

class PatientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::all();
        return view('common.patients')->with('patients', $patient);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $insurances = Insurance::all();
        $genders = Gender::all();
        $maritalsituations = MaritalSituation::all();
        return view('secretary.addpatient')->with('cities', $cities)->with('insurances', $insurances)->with('genders', $genders)->with('maritalsituations', $maritalsituations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient;
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->CIN = $request->cin;
        $patient->address = $request->address;
        $patient->birth_date = $request->birth_date;
        $patient->profession = $request->profession;
        $patient->phone = $request->phone;
        $patient->marital_situation_id = $request->marital_situation_id;
        $patient->gender_id = $request->gender_id;
        $patient->insurance_id = $request->insurance_id;
        $patient->city_id = $request->city_id;
        $patient->save();
        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $patient = Patient::find($id);
        return view('common.patient')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        Debugbar::error($id);
        $patient = Patient::find($id);
        $cities = City::all();
        $insurances = Insurance::all();
        $genders = Gender::all();
        $maritalsituations = MaritalSituation::all();
        return view('secretary.editpatient')->with('patient', $patient)->with('cities', $cities)->with('insurances', $insurances)->with('genders', $genders)->with('maritalsituations', $maritalsituations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Debugbar::error($id);
        $patient = Patient::where('id', $id)->firstOrFail();
        $patient->id = $patient->id;
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->CIN = $request->cin;
        $patient->address = $request->address;
        $patient->birth_date = $request->birth_date;
        $patient->profession = $request->profession;
        $patient->phone = $request->phone;
        $patient->marital_situation_id = $request->marital_situation_id;
        $patient->gender_id = $request->gender_id;
        $patient->insurance_id = $request->insurance_id;
        $patient->city_id = $request->city_id;
        $patient->save();

        return route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('patients.index');
    }
}
