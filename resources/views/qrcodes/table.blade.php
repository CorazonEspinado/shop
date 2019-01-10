<table class="table table-responsive" id="qrcodes-table">
    <thead>
    <tr>


        <th>Website</th>
        <th>Company Name</th>
        <th>Product Name</th>
        <th>Qrcode Path</th>
        <th>Amount</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    {{--TODO: status needs refactoring--}}
    @foreach($qrcodes as $qrcode)

        <tr>
{{--TODO: needs recreate form--}}
            <td>{!! $qrcode->website !!}</td>
            <td><a href="{!! route('qrcodes.show', [$qrcode->id]) !!}">
                {!! $qrcode->company_name !!}</td>
        </a>
            <td>{!! $qrcode->product_name !!}</td>
            <td>{!! $qrcode->qrcode_path !!}</td>
            <td>{!! $qrcode->amount !!}</td>
            <td>
                    @if ($qrcode->status)
                        {!! $status=data_get(config('qrcodes.status'),1)!!}
                    @else
                        {!! $status=data_get(config('qrcodes.status'), 0)!!}
                    @endif</td>
            <td>
                {!! Form::open(['route' => ['qrcodes.destroy', $qrcode->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('qrcodes.show', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        {{--TODO: needs refactoring clickable area--}}
    @endforeach
    </tbody>
</table>
