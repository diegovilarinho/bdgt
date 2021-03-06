<?php

namespace Bdgt\Resources\Traits;

use Bdgt\Resources\TenancyObserver;
use Bdgt\Resources\User;
use Bdgt\Scopes\TenancyScope;

trait HasTenancy
{
    /**
     * Apply the Tenancy scope in the model's boot method.
     */
    public static function bootHasTenancy()
    {
        static::addGlobalScope(new TenancyScope);
        static::observe(new TenancyObserver);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
