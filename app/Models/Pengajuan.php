<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';
    public $timestamps = false;
    protected $fillable = [
        'pengunjung_id',
        'berkas',
        'status',
    ];
}
