<?php

namespace App\Repositories;

use App\Models\AccountHistory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AccountHistoryRepository
 * @package App\Repositories
 * @version January 16, 2019, 10:31 pm UTC
 *
 * @method AccountHistory findWithoutFail($id, $columns = ['*'])
 * @method AccountHistory find($id, $columns = ['*'])
 * @method AccountHistory first($columns = ['*'])
*/
class AccountHistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'account_id',
        'user_id',
        'message'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AccountHistory::class;
    }
}
