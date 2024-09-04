<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primaryKey = 'order_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'order_ID',
        'user_details_ID',
        'designer_ID',
        'production_ID',
        'order_confirmation_ID',
        'order_status_ID',
        'apparel_category_ID',
        'customization_details_ID',
        'print_type_ID',
        'estimated_delivery_date',
        'order_design',
        'price',
    ];

    public function userDetails()
    {
        return $this->belongsTo(UserDetails::class, 'user_details_ID');
    }

    public function designerCompany()
    {
        return $this->belongsTo(DesignerCompany::class, 'designer_ID');
    }

    public function productionCompany()
    {
        return $this->belongsTo(ProductionCompany::class, 'production_ID');
    }

    public function orderConfirmation()
    {
        return $this->belongsTo(OrderConfirmation::class, 'order_confirmation_ID');
    }

    public function orderStatusType()
    {
        return $this->belongsTo(OrderStatusType::class, 'order_status_ID');
    }

    public function apparelCategory()
    {
        return $this->belongsTo(ApparelCategory::class, 'apparel_category_ID');
    }

    public function customizationDetails()
    {
        return $this->belongsTo(CustomizationDetails::class, 'customization_details_ID');
    }

    public function printType()
    {
        return $this->belongsTo(PrintType::class, 'print_type_ID');
    }
}
