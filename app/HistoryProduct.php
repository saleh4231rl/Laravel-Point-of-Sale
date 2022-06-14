<?php
//© 2022 Copyright: Muhammad Saleh
namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryProduct extends Model
{
        //demi keamanan kalian harusnya ubah ini ke fillable ya
        protected $guarded = [];

        public function user(){
                return $this->belongsTo(User::class);
        }
}
