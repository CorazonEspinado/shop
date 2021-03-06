<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::number('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Credit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_credit', 'Total Credit:') !!}
    {!! Form::number('total_credit', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Debit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_debit', 'Total Debit:') !!}
    {!! Form::number('total_debit', null, ['class' => 'form-control']) !!}
</div>

<!-- Withdraw Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('withdraw_method', 'Withdraw Method:') !!}
    {!! Form::text('withdraw_method', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_email', 'Payment Email:') !!}
    {!! Form::text('payment_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Swift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('swift', 'Swift:') !!}
    {!! Form::text('swift', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank account', 'Bank Account:') !!}
    {!! Form::text('bank account', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', 'Country Code:') !!}
    {!! Form::number('country_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('payment_details', 'Payment Details:') !!}
    {!! Form::textarea('payment_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('accounts.index') !!}" class="btn btn-default">Cancel</a>
</div>
