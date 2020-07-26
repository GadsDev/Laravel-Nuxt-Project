<?php

/**
 * Todo model com essa Trait vai ter 2 funções para ordenar desc e asc
 */
namespace App\Traits;
//Pode ser usada em varios Models ae ele vão ter essas funções em sua instancia
trait Orderable {
    public function scopeLatestFirst($query){
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeOldestFirst($query){
        return $query->orderBy('created_at', 'asc');
    }
}