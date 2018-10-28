<?php

namespace Llcbd\Settings\Models;

use Illuminate\Database\Eloquent\Model;
use Llcbd\Settings\Traits\GetSettings;

class SettingsEloquent extends Model
{
    use GetSettings;

    public $timestamps = false;

    protected $fillable = ['key', 'value'];

    protected $table = 'llcbd_settings';
}
