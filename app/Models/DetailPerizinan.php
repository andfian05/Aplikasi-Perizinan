<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class DetailPerizinan extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'detail_perizinan';

    protected $fillable = [
        'mhs_id', 'tanggal_keluar', 'waktu_keluar', 'tanggal_masuk', 'waktu_masuk', 'keterangan'
    ];

    public function mahasantri()
    {
        return $this->belongsTo(Mahasantri::class, 'mhs_id', 'id');
    }

}