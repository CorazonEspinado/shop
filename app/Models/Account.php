<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Account",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="balance",
 *          description="balance",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="total_credit",
 *          description="total_credit",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="total_debit",
 *          description="total_debit",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="withdraw_method",
 *          description="withdraw_method",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="payment_email",
 *          description="payment_email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bank_name",
 *          description="bank_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="swift",
 *          description="swift",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bank account",
 *          description="bank account",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="country_code",
 *          description="country_code",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="payment_details",
 *          description="payment_details",
 *          type="string"
 *      )
 * )
 */
class Account extends Model
{
    use SoftDeletes;

    public $table = 'accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'balance',
        'total_credit',
        'total_debit',
        'withdraw_method',
        'payment_email',
        'bank_name',
        'swift',
        'bank account',
        'country_code',
        'payment_details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'balance' => 'float',
        'total_credit' => 'float',
        'total_debit' => 'float',
        'withdraw_method' => 'string',
        'payment_email' => 'string',
        'bank_name' => 'string',
        'swift' => 'string',
        'bank account' => 'string',
        'country_code' => 'integer',
        'payment_details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
