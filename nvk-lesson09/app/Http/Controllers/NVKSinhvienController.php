<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NVKSinhVien;

class NVKSinhvienController extends Controller
{
    //list/insert/update(edit)/delete

    public function nvkList()
    {
        //lay toan bo ds sinh vien
        $nvksinhviens = NVKSinhVien::all();

        return view('NVKSinhVien.nvk-list',['nvksinhviens'=>$nvksinhviens]);
    }

    //create (insert)
    public function nvkCreate()
    {
        return view ('NVKSinhVien.nvk-create');
    }

    public function nvkCreateSubmit(Request $request)
    {
        //lay du lieu submit tren form, gan cho cac thuoc tinh cua doi tuong sinh vien
        $nvkSinhvien = new nvkSinhvien();
        $nvkSinhvien->nvkMasv = $request->nvkMasv;
        $nvkSinhvien->nvkHosv = $request->nvkHosv;
        $nvkSinhvien->nvkTensv = $request->nvkTensv;
        $nvkSinhvien->nvkPhai = $request->nvkPhai;
        $nvkSinhvien->nvkNgaysinh = $request->nvkNgaysinh;
        $nvkSinhvien->nvkNoisinh = $request->nvkNoisinh;
        $nvkSinhvien->nvkMakh = $request->nvkMakh;
        //ghi vao bang trong csdl
        $nvkSinhvien->save();
        return view ('NVKSinhVien.nvk-create');
        return back()->with('nvkSinhvien_created','Da them 1 sinh vien moi thanh cong!!!');
    }

}
