<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_mobil extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return asset('images/mobil/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return unlink(public_path('images/mobil/' . $this->gambar));
        }
    }
}
