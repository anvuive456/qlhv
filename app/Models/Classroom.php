<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    static $classNames = [
        'Toán cao cấp ',
        'Kỹ thuật lập trình ',
        'Java ',
        'Python ',
    ];
    protected $table = 'classroom';

    protected $dateFormat = 'dd-MM-yyyy';
}
