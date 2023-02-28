<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{
    use HasFactory;

    protected $table = 'usersProfile';

    /**  @var string[]  */
    protected $fillable = [
        'fullName',
        'dateBirth',
        'email',
        'profilePicture',
    ];
}
