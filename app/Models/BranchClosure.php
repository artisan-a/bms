<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchClosure extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\SoftDeletes, \App\Traits\CreatedUpdatedBy;
    protected $guarded = ['id'];
}
