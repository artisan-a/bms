<?php

namespace App\Traits;

trait CreatedUpdatedBy
{
    public static function bootCreatedUpdatedBy()
    {
        // updating created_by and updated_by when model is created
        static::creating(function ($model) {
            if (!$model->isDirty('created_by')) {
                if (auth()->user() != null && !empty(auth()->user())) {
                    $model->created_by = auth()->user()->id;
                } else {
                    $model->created_by = 3682;
                }
            }
        });

        // updating updated_by when model is updated
        static::updating(function ($model) {
            if (!$model->isDirty('updated_by')) {
                if (auth()->user() != null && !empty(auth()->user())) {
                    $model->updated_by = auth()->user()->id;
                } else {
                    $model->updated_by = 3682;
                }
            }
        });

        // deleting deleted_by when model is deleted
        static::deleting(function ($model) {
            if (!$model->isDirty('deleted_by')) {
                if (auth()->user() != null && !empty(auth()->user())) {
                    $model->deleted_by = auth()->user()->id;
                } else {
                    $model->deleted_by = 3682;
                }
            }
        });
    }
}