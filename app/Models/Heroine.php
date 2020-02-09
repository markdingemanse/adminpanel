<?php

namespace App\Models;

use App\Models\Logging;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Heroine extends Model implements AuditableContract
{
    use SoftDeletes, Auditable;

    protected $connection = 'faptitan';

    /**
     * {@inheritdoc}
     */
    protected $table = 'heroines';

    public $timestamps = false;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name',
        'link_to_picture',
        'discription',
        'attack_type',
    ];

    public function loggings() : HasMany
    {
        return $this->hasMany(Logging::class, 'heroine_id', 'id');
    }
}
