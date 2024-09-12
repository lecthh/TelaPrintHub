<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerGallery extends Model
{
    use HasFactory;

    protected $table = 'designer_gallery';

    protected $fillable = [
        'designer_ID',
        'file_path',
    ];

    public function Designer()
    {
        return $this->belongsTo(DesignerCompany::class, 'designer_ID', 'designer_ID');
    }
}
