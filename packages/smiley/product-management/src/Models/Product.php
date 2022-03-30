<?php

namespace Smiley\ProductManagement\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Smiley\UserCrud\Models\User;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sku',
        'price',
        'qty',
        'salable_qty',
    ];

    public function user()
    {
        return $this->belongsTo(config('usercrud.models.user'));
    }
}
