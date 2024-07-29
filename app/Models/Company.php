<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'website'];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getCompanies()
    {
        if (!auth()->check()) {
            return false;
        }
        if (auth()->user()->isAdmin()) {
            return self::all();
        }
        return Auth::user()->companies;
    }

}

