<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // ถ้าคุณใช้ตารางที่ชื่อว่า "products" และต้องการระบุชื่อคอลัมน์ที่อนุญาตให้กรอก
    protected $fillable = ['name', 'description', 'price', 'image'];
}
