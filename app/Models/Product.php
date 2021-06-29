<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isEmpty;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        "name",
        "image",
        "description",
        "price",
        "qty",
        "category_id",
    ];

    public function Category(){
//        return $this->belongsTo(Category::class,"category_id","id");
        return $this->belongsTo(Category::class);// phai khoa ngoai la category_id va khoa chinh ben category la id
        // return $this->belongsTo(Model::class,"model_id","id") -> return $this->belongsTo(Model::class)
    }

//    public function getImage(){
//        if($this->image){
//            return assert($this->image); ( Ảnh )
//        }
//        return "";
//    }
    public function scopeSearch($query,$search){
        if($search== "" || $search == null){
            return $query;
        }
        return $query->where("name","LIKE","%$search%");
    }
    public function scopeCategory($query,$categoryId){
        if($categoryId==0 || $categoryId == null){
            return $query;
        }
        return $query->where("category_id",$categoryId);
    }
    public function scopeFronPrice($query,$price){
        //
    }
    public function scopePrice($query,$price){
        //
    }
}
