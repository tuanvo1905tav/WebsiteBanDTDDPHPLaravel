<?php

namespace App\Http\Controllers;

use App\khachhang;
use App\SanPham;
use Illuminate\Http\Request;
use App\phankhuc;
use App\nhasanxuat;
use DateTime;
use Illuminate\Support\Facades\Auth;

class ChuyenHuongController extends Controller
{
    public function getMaster(){
        return view('master.master');
    }
    public function getTrangChu(){
        return view('content.trangchu');
    }
    


    public function getDangNhap(){
        return view('content.dangnhap');
    }
    public function postDangNhap(Request $request)
    {
        $validatr = $this->validate($request,[
            'tenDangNhap'=>'required',
            'password'=>'required'
            
        ],[
            'tenDangNhap.required'=>'Bạn chưa nhập Tên',
            'password.required'=>'Bạn chưa nhập mật khẩu'
        ]);
        $tenDangNhap = $request->tenDangNhap;
        $matKhau = md5($request->password);

        $khangHang = khachhang::where('TenDangNhap',$tenDangNhap)->first();
        $khangHang = khachhang::where('MatKhau',$matKhau)->first();

        if($khangHang == null)
        {
            return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
        }else
        {
            if($tenDangNhap == 'admin' && $matKhau == '21232f297a57a5a743894a0e4a801fc3'){
                return redirect('admin');
            }
            else{
                return redirect('/');
            }
        }
        // if(Auth::attempt(['TenDangNhap' => $request->tenDangNhap, 'MatKhau' => md5($request->password)]))
        // {
        //     return redirect('trangchu');
        // }else 
        // {
        //     return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
        // }

    }


    public function getDangKy(){
        $khachhang = khachhang::all();
        return view('content.dangky',['khachhang'=>$khachhang]);
    }
    public function postdangky(Request $request)
    {
        $validatr = $this->validate($request,[
            'ten'=>'required',
            'ho'=>'required',
            'diaChi'=>'required',
            'sdt'=>'required',
            'ngaySinh'=>'required',
            'tenDangNhap'=>'required|unique:khachhang,TenDangNhap',
            'password'=>'required',
            'repassword'=>'required|same:password',
            'gioiTinh'=>'required'
        ],[
            'ten.required'=>'Bạn chưa nhập Tên',
            'ho.required'=>'Bạn chưa nhập họ',
            'diaChi.required'=>'Bạn chưa nhập địa chỉ',
            'sdt.required'=>'Bạn chưa nhập số điện thoại',
            'tenDangNhap.required'=>'Bạn chưa nhập tên tài khoản',
            'tenDangNhap.unique'=>'tài khoản đã được đăng ký',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'repassword.required'=>'Bạn chưa nhập lại mật khẩu',
            'repassword.same'=>'mật khẩu không khớp'
        ]);

        $khachHang = new khachhang ; 
        $khachHang->hoDem = $request->ho;
        $khachHang->tenTV = $request->ten;
        $khachHang->DiaChi = $request->diaChi;
        $khachHang->SoDienThoai = $request->sdt;
        $khachHang->NgaySinh = $request->ngaySinh;
        $khachHang->TenDangNhap = $request->tenDangNhap;
        $khachHang->MatKhau = md5($request->password);
        $khachHang->GioiTinh = $request->gioiTinh;
        $khachHang->eMail = $request->email;

       $khachHang->save();

       return redirect('dangky')->with('thongbao','Đăng ký thành công');
    }


    public function getAdmin(){
        $phanKhuc  = phankhuc::all();
        $nhasanxuat = nhasanxuat::all();
        $sanpham = SanPham::all();
        $nowDay = Date("d/m/Y h:i:s ");
        return view('content.admin',['phankhuc'=>$phanKhuc,'nhasanxuat'=>$nhasanxuat,'nowDay'=>$nowDay, 'sanpham'=>$sanpham]);
    }
    public function postThem(Request $request)
    {
        $validatr = $this->validate($request,[
            'maSP'=>'required|unique:sanphamdienthoai,MaSANPHAM',
            'tenSp'=>'required',
            'giaBan'=>'required',
            'soLuong'=>'required'
        ],
        [
            'maSP.required'=>'Bạn chưa nhập mã',
            'maSP.unique'=>'Mã đã tồn tại',
            'tenSp.required'=>'Bạn chưa nhập tên',
            'giaBan.required'=>'Bạn chưa nhập giá',
            'soLuong.required'=>'Bạn chưa nhập số lượng'
        ]);

        $sanPham = new SanPham();
        $sanPham->MaSANPHAM = $request->maSP;
        $sanPham->TenSANPHAM = $request->tenSp;
        $sanPham->DONGIA = $request->giaBan;
        $sanPham->MoTa = $request->MoTa;
        $sanPham->MaPHANKHUC = $request->phanKhuc;
        $sanPham->MaNHASANXUAT = $request->nsx;
        $sanPham->NgayCapNhat = $request->ngayCapNhat;
        $sanPham->SoLuongBan = $request->soLuong;



//chuyen hình 
        if ($request->hasFile('hinh'))
        {
            $file = $request->file('hinh');
            $Duoi = $file->getClientOriginalExtension();
            if($Duoi != 'jpg' && $Duoi != 'png' && $Duoi != 'jpeg')
            {
                return redirect('admin')->with('Lỗi','Bạn chỉ được chọn .jpg , .png , .jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while(file_exists("upload/sanpham/".$Hinh))
            {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("images/sanpham",$Hinh);
            $sanPham->HinhMinhHoa= $Hinh;
           
        }
        else
        {
      
            $sanPham->HinhMinhHoa = "";
        }

        $sanPham->save();
        
            
        return redirect('admin')->with('thongbao','Thêm thành công');
    }


    public function getGioHang($MaSANPHAM){
        $SanPham  = SanPham::where('MaSANPHAM',$MaSANPHAM)->first();

        return view('content.giohang',['sanpham'=>$SanPham]);
        }


    public function getSanPham(){
        $phanKhuc  = phankhuc::all();
        $nhasanxuat = nhasanxuat::all();
        $sanpham = SanPham::all();
        return view('content.sanpham',['phankhuc'=>$phanKhuc,'nhasanxuat'=>$nhasanxuat, 'sanpham'=>$sanpham]);
    }
    


    public function getSua($MaSANPHAM)
    {
    
        $SanPham  = SanPham::where('MaSANPHAM',$MaSANPHAM)->first();

        return view('content.suaSanPham',['sanpham'=>$SanPham]);
    }
    public function postSua(Request $request,$MaSANPHAM)
    {
        $SanPham  = SanPham::where('MaSANPHAM',$MaSANPHAM)->first();
        $this->validate($request,[
            'tenSp'=>'required',
            'giaBan'=>'required',
            'soLuong'=>'required'
        ],
        [
            'tenSp.required'=>'Bạn chưa nhập tên',
            'giaBan.required'=>'Bạn chưa nhập giá',
            'soLuong.required'=>'Bạn chưa nhập số lượng'
        ]);
        // $SanPham->MaSANPHAM = $request->maSP;
        // $SanPham->TenSANPHAM = $request->tenSp;
        // $SanPham->DONGIA = $request->giaBan;
        // $SanPham->MoTa = $request->MoTa;
        // $SanPham->SoLuongBan = $request->soLuong;
        $SanPham  = SanPham::where('MaSANPHAM',$MaSANPHAM)->update(['TenSANPHAM'=>$request->tenSp]);
        $SanPham  = SanPham::where('MaSANPHAM',$MaSANPHAM)->update(['DONGIA'=>$request->giaBan]);
        $SanPham  = SanPham::where('MaSANPHAM',$MaSANPHAM)->update(['MoTa'=>$request->MoTa]);
        $SanPham  = SanPham::where('MaSANPHAM',$MaSANPHAM)->update(['SoLuongBan'=>$request->soLuong]);


        return redirect('admin')->with('thongbao','Sửa thành công');
    }

    public function getXoa($MaSANPHAM)
    {

        $sanPham = SanPham::where('MaSANPHAM',$MaSANPHAM)->delete();

        return redirect('admin')->with('thongbao','Xóa thành công');
    }

    //End function chuyển view
    public function get5g(){
        return view('content.5g');
    }
    public function getBlow(){
        return view('content.blow');
    }
    public function getNight(){
        return view('content.night');
    }
    public function getGioiThieu(){
        return view('content.gioithieu');
    }
    public function getSuKien(){
        return view('content.sukien');
    }
}
