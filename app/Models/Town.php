<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $quarded=false;
    protected $table = 'towns';
    public $timestamps = false;
    protected $fillable = [
        'company_id',
        'name',
        'timezone',
        'region',
    ];
    use HasFactory;
}
