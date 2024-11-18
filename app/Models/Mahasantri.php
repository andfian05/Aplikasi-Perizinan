<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Mahasantri extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'mahasantri';
    protected $fillable = [
        'nama', 'email', 'password', 'kelas', 'angkatan', 'kamar', 'status_akun', 'photo'
    ];

    public $sortable = [
        'nama', 'email', 'password', 'kelas', 'angkatan', 'kamar', 'status_akun', 'photo'
    ];

}
