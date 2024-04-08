<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level';        //Mendefinisikan nama tabel yang adigunakan oleh model ini
    protected $primaryKey = 'level_id';  //Mendefinisikan primary key dari tabel yang akan digunakan

    protected $fillable =[
        'level_kode',
        'level_nama'
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(UserModel::class);
    }
}
