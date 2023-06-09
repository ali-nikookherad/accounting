<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "name_farsi",
        "is_endpoint",
        "is_entrypoint",
        "user_id",
    ];

    public function accounts()
    {
        return $this->morphMany(Account::class, "accountable");
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, "rel_categories_products", "product_id", "category_id");
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, "rel_orders_products", "product_id", "order_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
