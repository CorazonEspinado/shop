<table class="table table-responsive" id="accounts-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Balance</th>
        <th>Total Credit</th>
        <th>Total Debit</th>
        <th>Withdraw Method</th>
        <th>Payment Email</th>
        <th>Bank Name</th>
        <th>Swift</th>
        <th>Bank Account</th>
        <th>Country Code</th>
        <th>Payment Details</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($accounts as $account)
        <tr>
            <td>{!! $account->user_id !!}</td>
            <td>{!! $account->balance !!}</td>
            <td>{!! $account->total_credit !!}</td>
            <td>{!! $account->total_debit !!}</td>
            <td>{!! $account->withdraw_method !!}</td>
            <td>{!! $account->payment_email !!}</td>
            <td>{!! $account->bank_name !!}</td>
            <td>{!! $account->swift !!}</td>
            <td>{!! $account->bank_account !!}</td>
            <td>{!! $account->country_code !!}</td>
            <td>{!! $account->payment_details !!}</td>
            <td>
                {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('accounts.show', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('accounts.edit', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
