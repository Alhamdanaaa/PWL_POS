<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'm_barang';        //Mendefinisikan nama tabel yang adigunakan oleh model ini
    protected $primaryKey = 'barang_id';  //Mendefinisikan primary key dari tabel yang akan digunakan

    protected $guarded = ['barang_id'];
    
    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class,'kategori_id','kategori_id');
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) =>url('/storage/posts/' . $image)
        );
    }
}
