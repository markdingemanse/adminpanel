<?php

namespace App\Models;

use App\Models\Heroine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Logging extends Model implements AuditableContract
{
    use SoftDeletes, Auditable;

    protected $connection = 'faptitan';

    /**
     * {@inheritdoc}
     */
    protected $table = 'logging';

    public $timestamps = false;

    public $dates = ['promotion_received'];

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'heroine_id',
        'promoted',
        'new_level',
        'promotion_received',
    ];

    public function heroine() : BelongsTo
    {
        return $this->belongsTo(Heroine::class, 'heroine_id', 'id');
    }
}
