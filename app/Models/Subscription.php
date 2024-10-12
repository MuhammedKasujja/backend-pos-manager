<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $plan_started
 * @property string $plan_expires
 * @property string $account_key
 * @property string $trial_started
 * @property string $plan_paid
 * @property int $enabled_modules
 * @property int $active
 * @property int $package_id
 * @property int $organization_id
 */
class Subscription extends Model
{
    use HasFactory;

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
