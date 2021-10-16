<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Registrasi extends Model
{

    protected $table = "registrasi_tb";

    public function getLast()
    {
        return DB::table('registrasi_tb')->orderBy('id_registrasi')->first();
    }

    use HasFactory;
}
