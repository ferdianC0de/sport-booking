<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstSportType extends Model
{
    use HasFactory, UUID;

    protected $keyType = 'string';

    public $incrementing = false;

    public $prefixPK = "MST";

    protected $primaryKey = "cd_sport_type";

    protected $fillable = [
        'name',
        'description'
    ];
}
