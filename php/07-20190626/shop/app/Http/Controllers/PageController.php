<?php
use App\Slide;
namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Session;
use App\Customer;
use App\Cart;
use App\Bill;
use App\User;
use Hash;


class PageController extends Controller
{
    public function getIndex()
    {
        //$slide = Slide::all;
        //print_r($slide);
        //exit;
       //return view('page.trangchu', compact('slide'));
       $new_product= Product::where('new',1)->paginate(6);
      $sanpham_khuyenmai=Product::where('promotion_price','<>',0)->paginate(8);
       //dd($new_product);
        return view('page.trangchu', compact('new_product','sanpham_khuyenmai'));
    }
    public function getLoaiSp($type)
    {
        $sp_theoloai =Product::where('id_type',$type)->get();
        $sp_khac=Product::where('id_type','<>','$type')->paginate(3);
        $loai = ProductType::all();
        $loai_sp= ProductType::where('id',$type)->first();
        return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
    public function getChitiet(Request $request)
    {
        $sanpham = Product::where('id',$request->id)->first();
        $sp_tuongtu=Product::where('id_type',$sanpham->id_type)->paginate(6);
        return view('page.chitiet_sanpham',compact('sanpham','sp_tuongtu'));
    }
    public function getLienHe()
    {
        return view('page.lienhe');
    }
    public function getGioiThieu()
    {
        return view('page.gioithieu');
    }
    public function getAddtoCart(Request $request,$id)
    {
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function DelItemCart()
    {
        $oldCart= Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0)
        {
            Session::put('cart',$cart);
        }
        else Session::forget('cart');
        return redircet()->back();
    }
    /*
    public function getCheckout(Request  $request)
    {
        $cart =Session::get('cart');
    
        $customer=new Customer;
        $customer->name = $request->name;
        $customer->gender=$request->gender;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->phone_number=$request->phone;
        $customer->note=$request->notes;
        $customer->save();


        $bill=new Bill;
        $bill->id_customer=$customer->id;
        $bill->date_order=date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->payment=$request->payment;
        $bill->note=$request->notes;
        $bill->save();

        foreach($cart['items']as $key=> $value)
        {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill=$bill->id;
            $bill_detail->id_product=$key;
            $bill_detail->quatity = $value['qty'];
            $bill_detail->unit_price= $value['price']/$value['qty'];
            $bill_detail->save();
        }
        Session::forget('cart');
        return redicret()->back()->with('thongbao','Đặt hàng thành công');
        //$bill->total= 
    }*/
    public function getLogin()
    {
        return view('page.dangnhap');
    }
    
    public function getSignin()
    {
        return view('page.dangki');
    }
    public function postSignin(Request $request){
    $this->validate($request,
        [
        'email'=>'request|email|unique:users,email',
        'password'=>'required|min:6|max:20',
        'fullname'=>'required',
        're_password'=>'required|same:password'
    ],
    [
        'email.required'=>"vui long nhập email",
        'email.email'=>"Không đúng định dạng email",
        'email.unique'=>"Email đã có người sử dụng",
        'password.required'=>"vui lòng nhập mật khẩu",
        're_password.same'=>"Mật khẩu không giống nhau",
        'password.min'=>"Mật khẩu ít nhất 6 kí tự"
    ]);
    $user =new User();
    $user ->full_name=$request->fullname;
    $user ->email=$request->email;
    $user ->password=Hash::make($request->password);
    $user ->phone=$request->phone;
    $user ->address=$request->address;
    $user ->save();
    return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogin(Request $request){
    $this->validate($request,
    [
        'email'=>'required|email',
        'password'=>'required|min:6|max:20'
    ],
    [
        'email.required'=>"vui lòng nhập email",
        'email.email'=>"Email khoog=ng đúng định dạng",
        'password.required'=>"vui lòng nhập mật khẩu",
        're_password.same'=>"Mật khẩu không giống nhau",
        'password.min'=>"Mật khẩu ít nhất 6 kí tự"
    ]);
    $credentials =array('email'=>$request->email,'password'=>$request->password);
    if (Auth::atttempt($credentials)){
        return redirecct()->back()->with(['flag'=>'success','message','Đang nhập thành công']);
    }
    else {
        return redirecct()->back()->with(['flag'=>'success','message','Đang nhập thành công']);
    }
    }
    }
 
