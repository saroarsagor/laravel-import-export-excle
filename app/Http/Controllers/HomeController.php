<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\SellingInvoice;
use App\Models\Product;
use Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$lang = Auth::user()->lang;
         $langs=['en','ar'];
        if (in_array($lang, $langs)) {
            Session::put('lang', $lang);
            App::setLocale($lang);

        }
        */
        if (Auth::user()->user_type == 'shop') {
            $user_id = Auth::user()->id;
        } else {
            $user_id = Auth::user()->user_id;
        }

        $TotalProductsPurchasePrice = DB::table('products')->where('user_id', $user_id)->get()->sum('purchase_price');
        $TotalProductsQty = DB::table('products')->where('user_id', $user_id)->get()->sum('qty');

        $Products = DB::table('products')->where('user_id', $user_id)->get();

        $totalStockPrice = 0;
        foreach ($Products as $key => $value) {
            $purchase_price = $value->purchase_price;
            $qty = $value->qty;
            $totalStockPrice += $purchase_price * $qty;
        }

        if (Auth::user()->user_type == 'systemadmin') {
            $ShopUsers = User::where('user_type', 'shop')->get();
        } else {
            $ShopUsers = [];
        }

        /*chart*/
        $monthsData = SellingInvoice::select(DB::raw('count(invoice_no) as total'), DB::raw('MONTH(created_at) month'))
            ->groupby('month')->get()->toArray();
        if($monthsData){
            $months = array_column($monthsData, 'month');
            foreach ($months as $key => $month) {
                $monthName = "'";
                $monthName .= Carbon::create()->month($month)->format('F');
                $monthName .= "'";
                $tempMonth[] = $monthName;
            }
            $months = $tempMonth;
            $total = array_column($monthsData, 'total');
            $months = implode(',', $months);
            $total = implode(',', $total);
            $monthGraph['months'] = $months;
            $monthGraph['total'] = $total;
        }else{
             $monthGraph['months'] = '';
            $monthGraph['total'] = '';
        }
        

        return view('backend.dashboard', compact('ShopUsers', 'TotalProductsPurchasePrice', 'TotalProductsQty', 'totalStockPrice', 'monthGraph'));


    }




    //suspendUnsuspendShop
    public function suspendUnsuspendShop($id)
    {
        $ShopUsers = User::where('id', $id)->where('user_type', 'shop')->first();
        if ($ShopUsers->status == '1') {
            $ShopUsers->status = '0';
            $ShopUsers->update();
            Toastr::success('Shop Suspend', '', ["progressbar" => true]);
            return redirect()->back();
        } else {
            $ShopUsers->status = '1';
            $ShopUsers->update();
            Toastr::success('Shop Unsuspend', '', ["progressbar" => true]);
            return redirect()->back();
        }

    }



    //salesManStatus
    public function salesManStatus($id)
    {
        $ShopUsers = User::where('id', $id)->where('user_type', 'salesman')->first();
        if ($ShopUsers->status == '1') {
            $ShopUsers->status = '0';
            $ShopUsers->update();
            Toastr::success('Active', '', ["progressbar" => true]);
            return redirect()->back();
        } else {
            $ShopUsers->status = '1';
            $ShopUsers->update();
            Toastr::success('Inactive', '', ["progressbar" => true]);
            return redirect()->back();
        }

    }


}
