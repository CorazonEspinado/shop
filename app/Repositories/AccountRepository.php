<?php

namespace App\Repositories;

use App\Models\Account;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AccountRepository
 * @package App\Repositories
 * @version January 16, 2019, 10:17 pm UTC
 *
 * @method Account findWithoutFail($id, $columns = ['*'])
 * @method Account find($id, $columns = ['*'])
 * @method Account first($columns = ['*'])
*/
class AccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Account::class;
    }
}
