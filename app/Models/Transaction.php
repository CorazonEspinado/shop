<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Transaction",
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
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="qrcode_id",
 *          description="qrcode_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="payment_method",
 *          description="payment_method",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="qrcode_owner_id",
 *          description="qrcode_owner_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="message",
 *          description="message",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="amount",
 *          description="amount",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="string"
 *      )
 * )
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'qrcode_id',
        'payment_method',
        'qrcode_owner_id',
        'message',
        'amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'string',
        'qrcode_id' => 'integer',
        'payment_method' => 'string',
        'qrcode_owner_id' => 'integer',
        'message' => 'string',
        'amount' => 'float',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
/*
 *  Transactions relationships to Qrcode and Users
 */
    public function qrcode()
    {
        return $this->belongsTo('App\Models\Qrcode');
    }
    /*
 *  Transactions relationships to  Users
 */
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
    /*
 *  Transactions relationships to  Users
 */
    public function qrcode_owner()
    {
        return $this->belongsTo('App\Models\User', 'qrcode_owner_id');
    }
}
