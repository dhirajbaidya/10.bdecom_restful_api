<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model{
    public $table = 'user_login';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
