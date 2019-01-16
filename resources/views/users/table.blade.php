<table class="table table-responsive" id="users-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Role </th>
        <th>Email</th>
        <th>Email Verified At</th>

@if (Auth::user()->role_id>3)
            <th colspan="3">Action</th>
    @endif
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>

            <td>{!! $user->name !!}</td>
            <td>{!! $user->role['name'] !!}</td>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->email_verified_at !!}</td>


            <td>
                @if (Auth::user()->role_id>3)
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open" title="look"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
                    @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
