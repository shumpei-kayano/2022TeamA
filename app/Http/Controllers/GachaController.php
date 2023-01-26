<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use App\Coupon;
use App\Get;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GachaController extends Controller
{
    public function see()
    {
    }

    public function play(Request $request)
    {
       
        // dd($store);
        $area = $request->session()->get('current_area');
        if (false !== strpos($area, "oita")) {
            $area=Store::select('areanum')->where('area_id','=','1')->count();
            $ransu = mt_rand(1,$area);
            $cond=['area_id'=>'1','areanum'=>$ransu];
            $store=Store::where($cond)->value('id');
            $coupons = Coupon::where('store_id', '=', $store)->get();
        } elseif (false !== strpos($area, 'beppu')) {
            $area=Store::select('areanum')->where('area_id','=','2')->count();
            $ransu = mt_rand(1,$area);
            $cond=['area_id'=>'2','areanum'=>$ransu];
            $store=Store::where($cond)->value('id');
            $coupons = Coupon::where('store_id', '=', $store)->get();
        }

        $id = Auth::id(); 
        $gets = Get::where('user_id', '=', $id)->get();
        
        return view('gacha.staging', ['coupons' => $coupons, 'gets' => $gets]);
    }

    public function stag()
    {
    }

    public function get()
    {
    }
    public function view()
    {
        return view('gacha.index');
    }
    public function show(Request $request)
    {

        // 存在チェック
        if ($request->session()->has('current_area')) {
            //
        } else {
            $request->session()->put('current_area', 'oita');
            $request->session()->put('area_count', '13');
        }
        $id = Auth::id();
        $gets = Get::where('user_id', '=', $id)->get();
        $cond = ['user_id' => $id];

        return view('gacha.index', ['gets' => $gets]);
    }
    public function change_area(Request $request)
    {
        if ($request->has('oita')) {
            $request->session()->put('current_area', 'oita');
            $request->session()->put('area_count', '13');
        } elseif ($request->has('beppu')) {
            $request->session()->put('current_area', 'beppu');
            $request->session()->put('area_count', '10');
        }

        return redirect('gacha/index');
    }

    public function modeldelete($store_id, $coupon_id)
    {
        $dt = new \Carbon\Carbon('now', 'Asia/Tokyo');
        $id = Auth::id();
        $ticket = new Ticket;
        $ticket->store_id = $store_id;
        $ticket->user_id = $id;
        $ticket->coupon_id = $coupon_id;
        $ticket->term_of_use = $dt->addHour(24);
        $ticket->flg = 0;
        $ticket->save();

        $id = Auth::id();
        $cond = ['user_id' => $id];
        $tickets = DB::table('tickets')
            ->where($cond)
            ->count();
        // dd($reviews);
        // $item=['reviews'=>$reviews];
        // return redirect()->action('CouponController@used');

        switch ($tickets) {
            case 5:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 1;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                // $notice = new Notice;
                // $notice->user_id = $id;
                // $notice->alert_id = 2;
                // $notice->notice = \Carbon\Carbon::today();
                // $notice->flg = 0;
                // $notice->save();
                break;
            case 20:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 2;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                // $notice = new Notice;
                // $notice->user_id = $id;
                // $notice->alert_id = 2;
                // $notice->notice = \Carbon\Carbon::today();
                // $notice->flg = 0;
                // $notice->save();
                break;
            case 50:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 3;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                // $notice = new Notice;
                // $notice->user_id = $id;
                // $notice->alert_id = 2;
                // $notice->notice = \Carbon\Carbon::today();
                // $notice->flg = 0;
                // $notice->save();
                break;
            case 100:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 4;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                // $notice = new Notice;
                // $notice->user_id = $id;
                // $notice->alert_id = 2;
                // $notice->notice = \Carbon\Carbon::today();
                // $notice->flg = 0;
                // $notice->save();
                break;
        }
        return redirect()->action('PersonController@create');
    }
}
