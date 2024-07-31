<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerCompanyApparelCategory extends Model
{
    use HasFactory;
    protected $table = 'designer_company_apparel_category';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['designer_ID', 'apparel_category_ID'];


    public function designerCompany()
    {
        return $this->belongsTo(DesignerCompany::class, 'designer_ID', 'designer_ID');
    }

    public function apparelCategory()
    {
        return $this->belongsTo(ApparelCategory::class, 'apparel_category_ID', 'apparel_category_ID');
    }
}
