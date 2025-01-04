<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukPendidikan extends Model
{
    protected $table = 'penduduk_pendidikan';

    protected $fillable = ['pendidikan', 'laki', 'perempuan', 'total'];
}
