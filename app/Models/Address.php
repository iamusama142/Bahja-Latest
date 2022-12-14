<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Model;



class Address extends Model

{

    protected $table = 'addresses';

    protected $fillable=['address_name','user_name','area','block','address','address1','phone','city','country','delivery_instruction','user_id','status','shipping','status','status'];

}

