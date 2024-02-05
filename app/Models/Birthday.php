<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;

class Birthday extends Model
{
    use HasFactory , Importable;
    protected $fillable = [
        'name',
        'email',
        'day',
        'month',
    ];
}
