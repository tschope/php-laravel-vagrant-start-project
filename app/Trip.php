<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = ['trip_group','connection_text','connection_id','type_transport','departure','from','to','gate','seat','luggage_transfer','order'];
}
