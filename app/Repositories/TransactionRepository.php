<?php

namespace App\Repositories;

use App\Models\Transaction;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TransactionRepository
 * @package App\Repositories
 * @version January 8, 2019, 8:15 pm UTC
 *
 * @method Transaction findWithoutFail($id, $columns = ['*'])
 * @method Transaction find($id, $columns = ['*'])
 * @method Transaction first($columns = ['*'])
*/
class TransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'qrcode_id',
        'payment_method',
        'qrcode_owner_id',
        'message',
        'amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transaction::class;
    }
}
