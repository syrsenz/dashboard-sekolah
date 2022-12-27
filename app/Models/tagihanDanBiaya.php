<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagihanDanBiaya extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
}
