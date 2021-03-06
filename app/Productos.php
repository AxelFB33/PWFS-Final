<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{

    public $table = "productos";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
    
    public function item() {

        return $this->belongsTo("App\Items", "producto_id");

    }

}
