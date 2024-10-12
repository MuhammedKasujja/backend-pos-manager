<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $plan
 * @property int $num_days
 * @property float $price
 * @property string|null $description
 */
class Package extends Model
{
    use HasFactory;

    public const PLAN_FREE = 'free';
    public const PLAN_PRO = 'pro';
    public const PLAN_ENTERPRISE = 'enterprise';
    public const PLAN_WHITE_LABEL = 'white_label';

    /// trial plans
    public const PLAN_TERM_MONTHLY = 'month';
    public const PLAN_TERM_YEARLY = 'year';

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
