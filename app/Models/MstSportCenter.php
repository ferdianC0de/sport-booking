<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MstSportCenter extends Model
{
    use HasFactory, UUID;

    protected $keyType = 'string';

    public $incrementing = false;

    public $prefixPK = "MSC";

    protected $primaryKey = "cd_sport_center";

    protected $fillable = [
        'name',
        'latitude',
        'longtitude',
        'address',
        'contact'
    ];

    public function fields() : HasMany {
        return $this->hasMany(MstSportField::class, 'cd_sport_center', 'cd_sport_center');
    }
}
