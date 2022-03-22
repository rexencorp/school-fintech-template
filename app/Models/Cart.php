<?php

namespace App\Models;

use App\Traits\Models\Cart\Fastable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use Fastable, HasFactory;

    protected $guarded  = ['id'];
}
