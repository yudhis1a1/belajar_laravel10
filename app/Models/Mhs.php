<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    use HasFactory;

    protected $table = 'mhs';
    protected $primaryKey = 'nim';

    public $incrementing = false;
    public $timestamps = true;
}
