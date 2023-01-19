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

        $tickets0 = DB::table('tickets')
        ->where('flg','=', '0')
        ->count();
        $id=Auth::id();
        $coupons=Coupon::where('id','=',$id)->get();
        $item=['tickets'=>$tickets,'coupons'=>$coupons,'tickets0'=>$tickets0];
        return view('coupon.admin',$item);
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
        return view('admins.store',$test);
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
