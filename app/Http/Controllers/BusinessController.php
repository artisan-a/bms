<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Http\Requests\BusinessStoreRequest;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class BusinessController extends Controller
{   
    public function index(){
        return view('/business/index');
    }

    public function getBusinessdata(Request $request){
        $businesses = Business::all();
        return DataTables::of($businesses)
            ->addIndexColumn()
            ->make(true);
    }

    public function store(BusinessStoreRequest $request){
        try{
            $validated = $request->validated();
            $fullPath = public_path("/images/business/logo");
            //dd($fullPath);
            $image_name = $request->phone_number. '_logo_'.Carbon::now()->format('Y_m_d_H_i_s').'.'. $request->logo->extension();
            $request->logo->move($fullPath, $image_name);
            $business =  Business::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'logo_image_path' => $image_name
            ]);
            return redirect('/business')->with('message',"Business added successfully");
        }catch(\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function view($id){
        try{
            $business = Business::find($id);
            return view('/business/view', compact(['business']));
        }catch(\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
