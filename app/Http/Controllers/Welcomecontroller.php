<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\ImportData;
use App\Imports\UserDataImport;
use App\Imports\businessNetworkDataImport;


class Welcomecontroller extends Controller
{
    public function index()
    {
        $referrals = DB::table('referrals')->orderBy('id','desc')->paginate(20);
        return view('welcome',compact('referrals'));
    }

     public function importData(Request $request){
        Excel::import(new ImportData(), $request->file('file')->store('temp'));
        return redirect()->back()
        ->with([
        'message' => 'Referrals Import Data successfully',
            'alert-type' => 'success'
        ]);
    }


    
    public function UserDataPage()
    {
        $users = DB::table('users')->orderBy('id','desc')->paginate(20);
        return view('UserDataPage',compact('users'));
    }

    public function UserDataImport(Request $request){
        Excel::import(new UserDataImport(), $request->file('file')->store('temp'));
        return redirect()->back()
        ->with([
        'message' => 'User Data Import successfully',
            'alert-type' => 'success'
        ]);
    }


    public function businessNetworkDataPage()
    {
        $business_networks = DB::table('business_networks')->orderBy('id','desc')->paginate(20);
        return view('businessNetworkDataPage',compact('business_networks'));
    }

      public function businessNetworkDataImport(Request $request){
        Excel::import(new businessNetworkDataImport(), $request->file('file')->store('temp'));
        return redirect()->back()
        ->with([
        'message' => 'Business Network Data Import successfully',
            'alert-type' => 'success'
        ]);
    }



}
