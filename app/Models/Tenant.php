<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function users() {
        return $this->hasMany(User::class);
    }
    public function products() {
        return $this->hasMany(Product::class);
    }
    public function orders() {
        return $this->hasMany(Order::class);
    }
    public function themes() {
        return $this->hasMany(Theme::class);
    }
    public function settings() {
        return $this->hasMany(Setting::class);
    }
}
