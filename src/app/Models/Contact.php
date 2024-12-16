<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'category_id',
        'first-name',
        'last-name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function getGenderLabelAttribute()
    // {
    //     $gender_labels = [1 => '男性', 2 => '女性', 3 => 'その他'];
    //     return $gender_labels[$this->gender] ?? '不明';
    // }
}
