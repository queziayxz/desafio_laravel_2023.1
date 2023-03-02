<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'address',
        'phone_number',
        'register_date',
        'pay_day',
        'expiration_date'
    ];

    const validades = [
        'day' => 'Dia',
        'week' => 'Semana',
        'month' => 'Mês'
    ];

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

}
