<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Perizinan extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'perizinan';
    protected $fillable = [
        'tgl_keluar', 'jam_keluar', 'tgl_masuk', 'jam_masuk', 'status'
    ];

    public $sortable = [
        'tgl_keluar', 'jam_keluar', 'tgl_masuk', 'jam_masuk', 'status'
    ];
}
