<?php namespace LaravelNews\CallRequest\Models;

use \Illuminate\Database\Eloquent\Model;

class CallRequest extends Model
{

    public $fillable = ['name', 'phone', 'message', 'time'];
}