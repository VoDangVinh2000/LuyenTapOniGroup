<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'companies';
    protected $fillable = [
        'id','company_name','company_web','company_code','company_phone'
    ];
    public $timestamps = true;
    use HasFactory;
}
