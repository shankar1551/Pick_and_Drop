<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
   


   protected $fillable=['sname','asdd','snumber','lat','lng','rname','radd','rnumber','lat2','lng2','pweight','pheight','plength','pwidth','comment','sent_by','status','assigned'];
}
