<?php

namespace Radiocubito\AutomaticPasswordHashing;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

trait HashPassword
{
    protected static function bootHashPassword()
    {
        static::creating(function (Model $model) {
            $model->autoHashPassword();
        });

        static::updating(function (Model $model) {
            $model->autoHashPassword();
        });
    }

    protected function autoHashPassword()
    {
        if (trim($this->password) === '') {
            return;
        }

        $this->attributes['password'] = Hash::make($this->password);
    }
}
