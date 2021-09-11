<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function submit(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "tel"=>"required",
            "comment"=>"required"
        ],[
            "name.required"=>"Vui lòng nhập tên sinh viên",
            "email.required"=>"Vui lòng nhập email sinh viên",
            "tel.required"=>"Vui lòng nhập số điện thoại của sinh viên",
            "comment.required"=>"Vui lòng nhập nhận xét :",
        ]);
        Survey::create([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "tel"=>$request->get("tel"),
            "comment"=>$request->get("comment")
        ]);

        return redirect()->back()->with('success','Bạn đã gửi nhận xét thành công.!');
    }
}
