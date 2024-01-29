<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class MstSportField extends Model
{
    use HasFactory, UUID;

    protected $keyType = 'string';

    public $incrementing = false;

    public $prefixPK = "MSF";

    protected $table = 'mst_sport_fields';

    protected $primaryKey = "cd_sport_field";

    protected $fillable = [
        'cd_sport_center',
        'cd_sport_type',
        'thumbnail',
        'images',
        'description'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function sportCenter(): BelongsTo
    {
        return $this->belongsTo(MstSportCenter::class, 'cd_sport_center', 'cd_sport_center');
    }

    public function sportType(): BelongsTo
    {
        return $this->belongsTo(MstSportType::class, 'cd_sport_type', 'cd_sport_type');
    }
}
