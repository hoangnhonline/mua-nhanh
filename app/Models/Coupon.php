<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Coupon extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'coupon';	

	 /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['coupon', 'used', 'updated_user', 'created_user', 'type', 'coupon_value'];
    
}
