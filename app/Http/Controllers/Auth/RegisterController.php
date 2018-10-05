<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use App\GiaSu;
use App\PhuHuynh;
use App\Mon;
use App\GiaSu_ChuyenNganh;
use App\DangKi;
use DB;
use Illuminate\Support\collection;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    protected function getRegister() {
       $mon = DB::table('Mon')->where('m_trangthai','2')->get();
       $chuyennganh = DB::table('ChuyenNganh')->where('cn_trangthai','2')->get();
       $trinhdo = DB::table('TrinhDoDay')->where('tdd_trangthai','2')->get();
        return view('TrangChu.dangkigs')->with('mon',$mon)
                                        ->with('trinhdo',$trinhdo)
                                        ->with('chuyennganh',$chuyennganh);;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $userId = $user->id;
        if($data['loaitk'] === '1'){
            $giasu = GiaSu::create([
                'gs_ten' => $data['gs_ten'],
                'gs_gioitinh' => $data['gs_gioitinh'],
                'gs_sdt' => $data['gs_sdt'],
                'gs_cmnd' => $data['gs_cmnd'],
                'gs_hocvi' => $data['gs_hocvi'],
                'gs_gioithieu' => $data['gs_gioithieu'],
                'gs_diachi' => $data['gs_diachi'],
                'id' => $userId ,
                'gs_taomoi' => Carbon::now(),
                'gs_capnhat' => Carbon::now(),
            ]);

            $gs_ma = $giasu->gs_ma;
            $giasu_chuyennganh = GiaSu_ChuyenNganh::create([
                'gs_ma' => $gs_ma,
                'cn_ma' => $data['cn_ma'],
            ]);
            $dangki = DangKi::create([
                'gs_ma' => $gs_ma,
                'm_ma' => $data['m_ma'],
                'tdd_ma' => $data['tdd_ma'],
                'dk_hocphi' => $data['dk_hocphi'],
                'dk_taomoi' =>  Carbon::now(),
                'dk_capnhat' =>  Carbon::now(),
            ]);
            // dd($data);
            // $request=array();
            // $request  = $data['images'];
            // dd($request);
            // $images=array();
            // $images= $data['images'];
            // if($files=$images->file('images')){
            //     foreach($files as $file){
            //         $Anh = new Anh();
            //         $Anh->id = $userId ;
            //         $name=$file->getClientOriginalName();
            //         $file->move('upload',$name);
            //         $Anh->ha_ten = $name;
            //         $images[]=$name;
            //         $Anh->save();
            //     }
            // }else{
            //     $Anh = new Anh();
            //     $Anh->id = $userId ;
            //     $Anh->ha_ten = 'comingsoon.png';
            //     $Anh->save();
            // }
        


        }else{
            $phuhuynh = PhuHuynh::create([
                'ph_ten' => $data['gs_ten'],
                'ph_sdt' => $data['gs_sdt'],
                'ph_diachi' => $data['gs_cmnd'],
                'ph_taomoi' => Carbon::now(),
                'ph_capnhat' => Carbon::now(),
                'id' => $userId ,
            ]);
        }
        return $user;
    }
}
