<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BarangModel extends Model
{
    protected $table = 'm_barang';        //Mendefinisikan nama tabel yang adigunakan oleh model ini
    protected $primaryKey = 'barang_id';  //Mendefinisikan primary key dari tabel yang akan digunakan

}
