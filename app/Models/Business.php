<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Branch;

class Business extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\SoftDeletes, \App\Traits\CreatedUpdatedBy;

    protected $guarded = ['id'];
    public function branch(): HasMany{
        return $this->hasMany(Branch::class);
    }
}
