<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postingan extends Model
{
    use HasFactory;

    protected $table = 'postingan';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    protected $with = ['kategori', 'author'];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search']  : false) { // nek ono pencarian sek diinput maka pencariane ditangkep terus nampilke judul sek sesuai ro pencarian
            return $query->where('judul', 'like', '%' . $filters['search'] . '%')
                ->orWhere('ringkasan', 'like', '%' . $filters['search'] . '%')
                ->orWhere('isi', 'like', '%' . $filters['search'] . '%');
        }  // nek raono pencarian, langsung tampilke kabeh berdasarkan sek paling baru sesuai ng Controller
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
