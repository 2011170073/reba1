<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    #protected $table = 'posts';#Postモデルにpostsテーブルを作成
    #protected $fillable = ['title','body'];
    public function getByLimit(int $limit_count){
        #$this(self?みたいなものでpostモデルを指す)にorderbyで降順に
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
