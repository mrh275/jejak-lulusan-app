<?php

namespace App\Models;

use App\Models\Kuliah;
use App\Models\Pekerjaan;
use App\Models\DataOrangTua;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biodata extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dataOrangTua()
    {
        return $this->hasOne(DataOrangTua::class, 'nisn_orang_tua', 'nisn');
    }

    public function kuliah()
    {
        return $this->hasOne(Kuliah::class, 'nisn_kuliah', 'nisn');
    }

    public function pekerjaan()
    {
        return $this->hasOne(Pekerjaan::class, 'nisn_pekerjaan', 'nisn');
    }
}
