<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Captura;
use App\Models\User;
use Spatie\FlareClient\View;

class CapturaController extends Controller
{
    public function index()
    {
        $records = Captura::all();
        $users = User::all();

        return view('content.capture', compact('records','users'));
    }

    public function store(Request $request)
    {       
        Captura::create($request->all());
        return redirect()->route('captura.index');        
    }

    public function edit(Request $request)
    {
     $json = Captura::all()->where('id',$request->get('id'));
      //return Response::json($json);
      return response()->json($json);
    }

    public function update(Request $request)
    {        
        //Request->update($request->all())->where('id',$request->get('id'));
     $ajax = Captura::find($request->get('id'));     
     $ajax->user = $request->user;
     $ajax->receipt_date = $request->receipt_date;
     $ajax->application = $request->application;
     $ajax->beneficiary_name = $request->beneficiary_name;
     $ajax->concept = $request->concept;
     $ajax->fund = $request->fund;
     $ajax->patrimonial_registration = $request->patrimonial_registration;
     $ajax->payment_complement = $request->payment_complement;
     $ajax->payment_method = $request->payment_method;
     $ajax->project_name = $request->project_name;
     $ajax->project_p3e = $request->project_p3e;
     $ajax->request_amount = $request->request_amount;
     $ajax->status_application = $request->status_application;
     $ajax->stock = $request->stock;
     $ajax->stock_name = $request->stock_name;
     $ajax->travel_format = $request->travel_format;
     $ajax->type_application = $request->type_application;
     $ajax->ures = $request->ures;
     $ajax->ures_name = $request->ures_name;
     $ajax->save();
     
     //return redirect()->route('captura.index');    
    $json = Captura::all();
    return response()->json($json);
    }

    public function destroy(Request $request)
    {
        $ajax = Captura::find($request->get('id'));
        $ajax->delete();
        
        $json = Captura::all();
        return response()->json($json);
    }
}
