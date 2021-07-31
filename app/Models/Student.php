<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
//    protected $primaryKey = "id"; // nếu là cột id thì ko cần khai báo
//    protected $keyType = "int"; // neu la int khong can khai bao
    protected $fillable = [
        "name",
        "email",
        "phone",
        "feedback",
    ];
//    public $timestamps = true;// mặc định là true  -> tự động cập nhật thời gian vào 2 cột created_at và updated_at
}
