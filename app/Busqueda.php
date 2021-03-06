<?php

namespace App;

use App\Transformers\BusquedaTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Busqueda extends Model
{
    use SoftDeletes;
    use Notifiable, HasApiTokens;

    public $transformer = BusquedaTransformer::class;

    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id',"palabra_q","instancia","instancia_id","dato"];


}
