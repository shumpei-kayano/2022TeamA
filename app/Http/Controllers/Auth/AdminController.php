<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Good;
use Auth;
use App\Models\User;
use App\Review;
use App\Ticket;
use App\Store;
use App\Coupon;
class AdminController extends Controller
{
    public function watch(){
        return view('welcome.admin');
    }
    public function in(){
        return view('welcome.admin');
    }
    public function enter(){
        return view('store.admin');
    }
    public function show(){
        $reviews = Review::selectRaw('round(AVG(star)) as count_review')
        ->get();
        return view('store.admin',['reviews'=>$reviews]);
    }
    public function storeupdate(Request $request){
        Store::where('id','=',$request->id)->update([
        'store_name'=>$request->store_name,
        'address'=>$request->address,
        'link'=>$request->link,
        'tel'=>$request->tel,
        'service'=>$request->service,
        'picture1'=>$request->picture1,
        'picture2'=>$request->picture2,
        'picture3'=>$request->picture3,
        // 'picture4'=>$request->picture4,
        'parking'=>$request->parking,
        'area_id'=>$request->op,
        'perfecture_id'=>$request->perfecture_id,
        'latitude'=>$request->latitude,
        'longitude'=>$request->longitude,
        'review_count'=>$request->review_count,
        'star'=>$request->star,
        'end_time'=>$request->end_time,
        'start_time'=>$request->start_time,
        'related1'=>$request->related1,
        'related2'=>$request->related2,
        'related3'=>$request->related3
        ]);
        return redirect()->action('Auth\AdminController@index');
      
    }
    public function edit(){
        return view('store.admin');
    }
    public function update(){
        $reviews = Review::selectRaw('round(AVG(star)) as count_review')
        ->get();
        $id=Auth::id();
        $stores=Store::where('id','=',$id)->get();
        $test=['reviews'=>$reviews,'stores'=>$stores];
        return view('admins.store',$test); 
    }
    public function look(){
        return view('coupon.admin');
    }
    public function see(){
        $tickets = DB::table('tickets')
        ->where('flg','=', '1')
        ->count();
        $id=Auth::id();
        $coupons=Coupon::where('id','=',$id)->get();
        $item=['tickets'=>$tickets,'coupons'=>$coupons];
        return view('coupon.admin',$item);
    }
    public function couponupdate(Request $request){
        Coupon::where('id','=',$request->id)->update([
        'store_id'=>$request->store_id,
        'provide'=>$request->provide,
        'coupon_photo'=>$request->coupon_photo,
        'coupon_name'=>$request->coupon_name,
        'closetime'=>$request->closetime
        ]);
        return redirect()->action('Auth\AdminController@see');
    
    }
    public function rewrite(){
        return view('coupon.admin');
    }
    public function set(){
        
    }
    public function add(){
        return view('coupon.admin');
    }
    public function create(){
        
    }
    public function view(){
        $reviews = Review::selectRaw('COUNT(user_id) as count_review')
        ->get();
        $goods=Good::where('user_id','=','3')->get();
        $tests=['goods'=>$goods,'reviews'=>$reviews];
        return view('review.admin',$tests);
    }
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $reviews = Review::selectRaw('round(AVG(star)) as count_review')
        ->get();
        $id=Auth::id();
        $stores=Store::where('id','=',$id)->get();
        $test=['reviews'=>$reviews,'stores'=>$stores];
        return view('admins.store',$test);
    }

}
