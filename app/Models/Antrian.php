<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Antrian extends Model
{

    protected $table = "antrian_tb";

    public function addAntrian($dataAntrian)
    {
        DB::table('antrian_tb')->insert($dataAntrian);

        // return $this->hasOne(DataBank::class);

    }

    use HasFactory;
}
