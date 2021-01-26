<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'nip', 'matakuliah', 'kelas'];
    protected $appends = ['kelas_label'];
    
    public function getKelasLabelAttribute()
    {
        if ($this->kelas) {
            return '<span class="text-red-500">A</span>';
        }
            return '<span class="text-green-500">B</span>';
    }
}
