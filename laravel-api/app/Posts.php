<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //ระบุตารางเอง
    protected $table = 'posts';
    //ระบุ Primary Key เอง
    protected $primaryKey = 'id';
    //	กำหนดให้สามารถกำหนดค่าได้ เช่น กำหนดค่าเพื่อส่งไปอัพเดท,หรือสร้างข้อมูลได้ เป็นต้น
    protected $fillable = ['title', 'content'];
    //ตรงข้ามกับ $fillable *ควรเลือกใช้อย่างใดอย่างนึงระหว่าง $guarded  หรือ $fillable
    protected $guarded = ['price'];
    //กำหนดค่าเริ่มต้นของ Attributes
    protected $attributes = [
        'status' => false,
        ];

public function status()
{
    return $this->hasOne('App\Status');
}

// public function competitors()
// {
//     return $this->hasMany('App\Competitor');
// }

// public function player()
// {
//     return $this->hasOne('App\Competitor')->where('competitor_type', 'player');
// }

// public function opponent()
// {
//     return $this->hasOne('App\Competitor')->where('competitor_type', 'opponent');
// }

}
