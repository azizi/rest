<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Cat extends Model
{
	const CREATED_AT = 'custom_created_at';
	const UPDATED_AT = 'custom_updated_at';
	protected $table = 'custom_table';

	@var is_bool

	public $timestamps = false;
	protected $primaryKey = custom_is_column';
	protected $fillable = ['name', 'age' ];

}