<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Good;
use Auth;
use App\Models\User;
use App\Models\Admin;
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
        return view('store.register');
    }
    public function show(){
        $reviews = Review::selectRaw('round(AVG(star)) as count_review')
        ->get();
        return view('store.admin',['reviews'=>$reviews]);
    }
    public function storeregister(Request $request){

        $cond = ['area_id'=>$request->op  ];
        $count = DB::table('stores')
        ->where($cond)
        ->count();
        $store = new store;
        $store->store_name = $request->store_name;
        $store->address = $request->address;
        $store->link = $request->link;
        $store->tel = $request->tel;
        $store->service = $request->service;
        $store->picture1 = $request->example;
        $store->picture2 = $request->example1;
        $store->picture3 = $request->example2;
        $store->parking = $request->parking;
        $store->area_id = $request->op;
        if($request->op==1){
            $store->areanum='1'.$count+1;
        }else if($request->op==1){
            $store->areanum='2'.$count+1;
        };
        $store->perfecture_id = $request->perfecture_id;
        $store->latitude = $request->latitude;
        $store->longitude = $request->longitude;
        $store->end_time = $request->end_time;
        $store->start_time = $request->start_time;

        $ar_num = range(101,$store->areanum);
        shuffle($ar_num);
        $store->related1=$ar_num[0] ;
        $store->related2=$ar_num[1] ;
        $store->related3=$ar_num[2] ;
        $store->save();

        $id=Auth::id();
        Admin::where('id','=',$id)->update([
            'store_id'=>$store->id
        ]);
        return redirect()->action('Auth\AdminController@index');
      
    }
    public function storeupdate(Request $request){
        Store::where('id','=',$request->id)->update([
        'store_name'=>$request->store_name,
        'address'=>$request->address,
        'link'=>$request->link,
        'tel'=>$request->tel,
        'service'=>$request->service,
        'picture1'=>$request->example,
        'picture2'=>$request->example1,
        'picture3'=>$request->example2,
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
        $store=Admin::select('store_id')->where('id','=',$id)->get();
        $stores=Store::find($store);
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

        $tickets0 = DB::table('tickets')
        ->where('flg','=', '0')
        ->count();
        $id=Auth::id();
        $store=Admin::select('coupon_id')->where('id','=',$id)->get();
        $coupons=Coupon::find($store);
        $item=['tickets'=>$tickets,'coupons'=>$coupons];
        $coupons=Coupon::where('id','=',$id)->get();
        $item=['tickets'=>$tickets,'coupons'=>$coupons,'tickets0'=>$tickets0];
        return view('coupon.admin',$item);
    }    
    public function couponregister(Request $request){
        $id=Auth::id();
        $storeid=Admin::where('id','=',$id)->value('store_id');
        // dd($storeid);


        $coupon = new coupon;
        $coupon->store_id = $storeid;
        $coupon->provide = $request->provide;
        $coupon->coupon_photo = $request->example;
        $coupon->coupon_photo2 = $request->example2;
        $coupon->coupon_photo3 = $request->example3;
        $coupon->coupon_name = $request->coupon_name;
        $coupon->closetime = $request->closetime;
        $coupon->save();

        
        $id=Auth::id();
        Admin::where('id','=',$id)->update([
            'coupon_id'=>$coupon->id
        ]);
        return redirect()->action('Auth\AdminController@see');
    
    }
    public function couponupdate(Request $request){
        Coupon::where('id','=',$request->id)->update([
        'store_id'=>$request->store_id,
        'provide'=>$request->provide,
        'coupon_photo'=>$request->example,
        'coupon_name'=>$request->coupon_name,
        'closetime'=>$request->closetime,
        'coupon_photo2'=>$request->example2,
        'coupon_photo3'=>$request->example3,
        ]);
        return redirect()->action('Auth\AdminController@set');
    
    }
    public function rewrite(){
        return view('coupon.admin');
    }
    public function set(){
        return view('coupon.register');
    }
    public function add(){
        return view('coupon.admin');
    }
    public function create(){
        
    }
    public function view(){
        // $reviews = Review::selectRaw('COUNT(user_id) as count_review')
        // ->get();
        // $goods=Good::where('user_id','=','3')->get();
        // $tests=['goods'=>$goods,'reviews'=>$reviews];
$id=Auth::id();
        $reviews = DB::table('reviews')
        ->where('store_id','=',$id)
        ->count();
        $goods=Review::where('store_id','=',$id)->get();
        $coupons=Coupon::where('id','=',$id)->get();
        // dd($reviews, $goods);
        return view('review.admin',['reviews'=>$reviews,'goods'=>$goods,'coupons'=>$coupons]);
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
        return view('store.register',$test);
    }

    public function new(Request $request)
    {
       dd($request);
        $admin=new Admin;
        $admin->password=Hash::make($request->password);
        $admin->email=$request->email;
        $admin->save();

        return view('homeadmin');


        // return Admin::create([
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
}
