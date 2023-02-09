<?php

namespace App\Http\Controllers;

use App\Store;
use App\Ticket;
use App\Coupon;
use App\Get;
use App\Ball;
use App\Area;
use Carbon\Carbon;
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
            $coupons=Coupon::where('provideflg','=','0')->get();
            $count=0;
           foreach($coupons as $coupon){
            $cond=['id'=>$coupon->store_id,'area_id'=>'1'];
            $area=Store::where($cond)->count();
            $count+=$area;
           }
            $ransu = mt_rand(1,$count);
            $cond=['area_id'=>'1','areanum'=>$ransu];
            $store=Store::where($cond)->value('id');
            $areaid=1;
            $coupons = Coupon::where('store_id', '=', $store)->get();

                    
        } elseif (false !== strpos($area, 'beppu')) {
            $coupons=Coupon::where('provideflg','=','0')->get();
            $count=0;
           foreach($coupons as $coupon){
            $cond=['id'=>$coupon->store_id,'area_id'=>'2'];
            $area=Store::where($cond)->count();
            $count+=$area;
           }
            $ransu = mt_rand(1,$count);
            $cond=['area_id'=>'2','areanum'=>$ransu];
            $store=Store::where($cond)->value('id');
            $areaid=2;
            $coupons = Coupon::where('store_id', '=', $store)->get();
        }

        $id = Auth::id(); 
        $gets = Get::where('user_id', '=', $id)->get();
        
        return view('gacha.staging', ['coupons' => $coupons, 'gets' => $gets,'areaid'=>$areaid]);
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
    //    dd($request->session()->current_area);
    
        // 存在チェック
        // if ($request->session()->has('current_area')) {
        //     //
        // } else {
        //     $request->session()->put('current_area', 'oita');
        //     $request->session()->put('area_count', '13');
            
        // }
        // dd($request->lat);

        //ポリゴン用のデータ取得
        if($request->session()->get('current_area')=='oita'){
            $arealatlng=Area::find(1);
        }else{
            $arealatlng=Area::find(2);
        }
        // エリア内判定
        $id = Auth::id();
        $gets = Get::where('user_id', '=', $id)->get();

        if ($request->session()->get('current_area')=='oita') {
            $area=1;
            }else{
                $area=2;
            }
    $cond = ['user_id' => $id,'area_id'=>$area];
    $ticket=Ticket::where($cond)->latest('updated_at')->first();
    if(!empty($ticket)){
    $now=\Carbon\Carbon::now()->format('Y-m-d H:i:s');
    if($now<=$ticket->term_of_use){
        $areaid=Store::where('id','=',$ticket->store_id)->value('area_id');
        if($areaid==1){
            // ガチャを回せない
            $use = new Carbon( $ticket->term_of_use);
            $second = new Carbon( $now);
            $sabun= $use->diffInMinutes($second); 
            $hour=floor($sabun/60);
            $hours=number_format($hour,0);
            $minutes=$sabun%60;
          
            return view('gacha.index', ['gets' => $gets,'gatya_flg' => 1,'hours'=> $hours,'minutes'=>$minutes,'arealatlng'=>$arealatlng]);
        }elseif($areaid==2) {
             // ガチャを回せない
             $use = new Carbon( $ticket->term_of_use);
            $second = new Carbon( $now);
            $sabun= $use->diffInMinutes($second); 
            $hour=floor($sabun/60);
            $hours=number_format($hour,0);
            $minutes=$sabun%60;
                return view('gacha.index', ['gets' => $gets,'gatya_flg' => 1,'hours'=> $hours,'minutes'=>$minutes,'arealatlng'=>$arealatlng]);
        }else{
            // ガチャを回せる
            return view('gacha.index', ['gets' => $gets,'gatya_flg' => 0,'arealatlng'=>$arealatlng]);
        }
            } else {
            // ガチャを回せる
            return view('gacha.index', ['gets' => $gets,'gatya_flg' => 0,'arealatlng'=>$arealatlng]);

        }
    }else{
        return view('gacha.index', ['gets' => $gets,'gatya_flg' => 0,'arealatlng'=>$arealatlng]);
    }

    }
    public function change_area(Request $request)
    {
    //    エリアごとのクーポン数取得。13のとこに変数埋め込む
    $store1=Store::where('area_id','=','1')->count();
    $store2=Store::where('area_id','=','2')->count();
        if ($request->has('oita')) {
            $request->session()->put('current_area', 'oita');
            $request->session()->put('area_count', $store1);
        } elseif ($request->has('beppu')) {
            $request->session()->put('current_area', 'beppu');
            $request->session()->put('area_count', $store2);
        }

        return redirect('gacha/index');
    }

    public function modeldelete($store_id, $coupon_id,$areaid)
    {
        $dt = new \Carbon\Carbon('now', 'Asia/Tokyo');
        $id = Auth::id();
        $ticket = new Ticket;
        $ticket->store_id = $store_id;
        $ticket->user_id = $id;
        $ticket->coupon_id = $coupon_id;
        $ticket->term_of_use = $dt->addHour(24);
        $ticket->flg = 0;
        $ticket->area_id=$areaid;
        $ticket->save();

        // 提供数判定
        $coupon=Coupon::find($ticket->coupon_id);
        
        $ticket=Ticket::where('coupon_id','=',$coupon->id)->count();
        
       if($coupon->provide<=$ticket){
        Coupon::where('id','=',$coupon->id)->update([
            'provideflg'=>1,
            ]);
       }
        

        $id = Auth::id();
        $cond = ['user_id' => $id];
        $tickets = DB::table('tickets')
            ->where($cond)
            ->count();
       

        switch ($tickets) {
            case 5:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 1;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 20:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 2;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 50:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 3;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
            case 100:
                $id = Auth::id();
                $get = new get;
                $get->badge_id = 4;
                $get->user_id = $id;
                $get->get_date = \Carbon\Carbon::today();
                $get->getflg = 0;
                $get->save();
                break;
        }
        return redirect()->action('PersonController@create');
    }
}
