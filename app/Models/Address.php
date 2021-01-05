<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'tbladdresses';
    protected $fillable = ['ID','line_1', 'line_2', 'line_3', 'county', 'post_code', 'country'];
    public $timestamps = false;
}