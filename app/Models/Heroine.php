<?php

namespace App\Models;

use App\Models\Logging;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Heroine extends Model
{
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

    public function logs() : HasMany
    {
        return $this->hasMany(Logging::class, 'heroine_id', 'id');
    }
}
