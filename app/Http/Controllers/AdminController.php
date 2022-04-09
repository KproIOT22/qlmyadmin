<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    private $pathViewController='admin.dashboard';
    public $users;
    public function __construct(){
        $this->users= new Users();
        
    }

    public function index(){

        $userList=$this->users->getALlUsers();

        return view($this->pathViewController.'.index',compact('userList'));
    }
    public function login(){

        

        return view($this->pathViewController.'.login');
    }
    public function register(){

        

        return view($this->pathViewController.'.register');
    }

    public function add(){

        return view($this->pathViewController.'.add');

    }
    public function postAdd(Request $request){
        $request->validate([
            'fullname'=>'required|min:5',
            'email'=>'required|email|unique:users',
            'phone_number'=>'required|min:8|max:8'

        ],[
            'fullname.required'=>'Họ và tên bắt buộc',
            'fullname.min'=>'Họ và tên phải từ :min ký tự trở lên ',
            'email.required'=>'Email bắt buộc',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>'Email đã tồn tại',
            'phone_number.min'=>'Số điện thoại phải :min chữ sô',
            'phone_number.max'=>'Số điện thoại phải :max chữ sô'
        ]);    
        $dataInsert=[
            $request->fullname,
            $request->email,
            $request->phone_number
        ];
        $this->users->addUser($dataInsert);
        return redirect()->route('admin')->with('msg','Thêm người dùng thành công');
    }
    public function getEdit($id=0){
        // return view($this->pathViewController.'.edit');
        if(!empty($id)){
            $userDetail=$this->users->getDetail($id);
            if(!empty($userDetail[0])){
                $userDetail=$userDetail[0];
            }
            else{
            return redirect()->route('admin')->with('msg','Người dùng không tồn tại');

            }
        }
        else{
            return redirect()->route('admin')->with('msg','Người dùng không tồn tại');
        }
        return view($this->pathViewController.'.edit',compact('userDetail'));

    }

    public function postEdit(Request $request,$id=0){
        $request->validate([
            'fullname'=>'required|min:5',
            'email'=>'required|email',
            'phone_number'=>'required|min:9|max:9'

        ],[
            'fullname.required'=>'Họ và tên bắt buộc',
            'fullname.min'=>'Họ và tên phải từ :min ký tự trở lên ',
            'email.required'=>'Email bắt buộc',
            'email.email'=>'Email không đúng định dạng',
            'phone_number.min'=>'Số điện thoại phải :min chữ sô',
            'phone_number.max'=>'Số điện thoại phải :max chữ sô'
        ]);    
        $dataUpdate=[
            $request->fullname,
            $request->email,
            $request->phone_number
        ];
        $this->users->updateUser($dataUpdate,$id);
        return back()->with('msg','Cập nhật người dùng thành công');
    }

    public function delete($id=0){
        if(!empty($id)){
            $userDetail=$this->users->getDetail($id);
            if(!empty($userDetail[0])){
                $deleteStatus=$this->users->deleteUser($id);
                if($deleteStatus){
                    $msg='Xóa người dùng thành công';
                }
                else{
                    $msg='Bạn không thể xóa người dùng lúc này';
                }
            }
            else{
                $msg='Người dùng không tồn tại';
            }
        }
        else{
            $msg='Liên kết không tồn tại';
        }
        return redirect()->route('admin')->with('msg',$msg);;

    }

}
