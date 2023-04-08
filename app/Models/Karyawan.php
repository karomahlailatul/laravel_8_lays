<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir',
        'jabatan_id',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function cariKaryawan($query)
    {
        return $this->where('nama', 'like', '%' . $query . '%')
            ->orWhereHas('jabatan', function ($query) use ($query) {
                $query->where('nama', 'like', '%' . $query . '%');
            })
            ->get();
    }

    public function hapusKaryawan($id)
    {
        return self::destroy($id);
        // return $this->delete();
    }
}
