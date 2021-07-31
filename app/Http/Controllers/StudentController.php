<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class StudentController extends Controller
{
    public function all(){
        $students = Student::withCount("Products")->get();
        return view("student.list",[
            "student"=>$students
        ]);
    }

    public function form(){
        return view("student.form");
    }

    public function save(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|numeric|min:0",
            "phone"=>"required|numeric|min:0",
            "feedback"=>"required|numeric|min:0",

        ],[
            "name.required"=>"Vui lòng nhập tên sinh viên",
            "email.min"=>"vui long nhập email",
            "phone.required"=>"Vui lòng nhập số điện thoiaj",
            "feedback.required"=>"Vui lòng nhận xét"
        ]);

        try {
            if($request->hasFile()){
                $file = $request->file();
                $fileName = time().$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();// d
                if($ext == "png" || $ext =="jpg"|| $ext =="jpeg" || $ext =="gif" ){
                    if($fileSize<13000000){ // không quá 13MB
                        $file->move("upload",$fileName);
                        $image = "upload/".$fileName;
                    }
                }
            }
            Student::create([
                "name"=>$request->get("name"),
                "email"=>$request->get("email"),
                "phone"=>$request->get("phone"),
                "feedback"=>$request->get("feedback"),
            ]);
            return redirect()->to("students");
        }catch (\Exception $e){
            abort(404);
        }
    }
    public function edit($id){
        $student= Product::findOrFail($id);// neu ko tim dc se sang 404
        return view("student.edit",[
            "student"=>$student,
        ]);
    }

    public function update(Request  $request,$id){
        $student= Student::findOrFail($id);// neu ko tim dc se sang 404
        $request->validate([
            "name"=>"required",
            "email"=>"required|numeric|min:0",
            "phone"=>"required|numeric|min:0",
            "feedback"=>"required|numeric|min:0",

        ],[
            "name.required"=>"Vui lòng nhập tên sinh viên",
            "email.min"=>"vui long nhập email",
            "phone.required"=>"Vui lòng nhập số điện thoiaj",
            "feedback.required"=>"Vui lòng nhận xét"
        ]);
        try {
            $student->update([
                "name"=>$request->get("name"),
                "email"=>$request->get("image"),
                "phone"=>$request->get("description"),
                "feedback"=>$request->get("price"),
            ]);
            return redirect()->to("students");
        }catch (\Exception $e){
            abort(404);
        }
    }

    public function delete($id){
        $student= Student::findOrFail($id);// neu ko tim dc se sang 404
        try {
            $student->delete();
            return redirect()->to("students");
        }catch (Exception $e){
            abort(404);
        }
    }

}
