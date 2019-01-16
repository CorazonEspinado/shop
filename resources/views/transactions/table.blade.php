<table class="table table-responsive" id="transactions-table">
    <thead>
        <tr>
            <th>User Name</th>
        <th>Product name</th>
        <th>Payment Method</th>
        <th>Qrcode Owner</th>
        <th>Message</th>
        <th>Amount</th>
        <th>Status</th>
{{--TODO: views need refactoring--}}
        </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{!! $transaction->user['name'] !!}</td>
            <td><a href="{!! route('transactions.show', [$transaction->id]) !!}">
                    {!! $transaction->qrcode['product_name'] !!}</a></td>
            <td>{!! $transaction->payment_method !!}</td>
            <td>{!! $transaction->qrcode_owner['name'] !!}</td>
            <td>{!! $transaction->message !!}</td>
            <td>{!! $transaction->amount !!}</td>
            <td>{!! $transaction->status !!}</td>
             </tr>
    @endforeach
    </tbody>
</table>
