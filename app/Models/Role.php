<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, UUID;

    protected $primaryKey = 'cd_role';

    protected $keyType = 'string';

    public $incrementing = false;

    public $prefixPK = "ROLE";

}
