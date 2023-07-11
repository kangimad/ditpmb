<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public function postingan()
    {
        return $this->hasMany(Postingan::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query -> when($filters['search'] ?? false, function($query, $search)
        {
            return $query->where('judul', 'like' . '%' . $search . '%')
            ->orWhere('ringkasan', 'like' . '%' . $search . '%')
            ->orWhere('isi', 'like' . '%' . $search . '%');
        });
    }

}
