<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Business_account extends Authenticatable
{ protected $table = 'business_account'; 
    use HasFactory, Notifiable;
    
    protected $fillable = [
        'business_name',
        'business_password',
        'mail',
        'is_admin'
    ];

    protected $hidden = [
        'business_password',  // Ẩn mật khẩu khi trả về dữ liệu
    ];

    public function isAdmin()
    {
    return $this->is_admin;
    }

}
