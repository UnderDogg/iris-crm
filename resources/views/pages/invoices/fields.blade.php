<!-- Topic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('topic',trans('app.general:topic') . " :" )  !!}
    {!! Form::text('topic', null, ['class' => 'form-control']) !!}
</div>

<!-- Account Name Field -->
<div class="form-group col-sm-6">
    <label for="account_name">{{trans('app.contact:account_name')}} :</label>
    {!! Form::select('account_name', $accounts, null, ['class' => 'form-control']) !!}
</div>

<!-- Phase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phase', trans('app.general:phase') . " :" )  !!}
    {!! Form::text('phase', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Name Field -->
<div class="form-group col-sm-6">
    <label for="contact_name">{{trans('app.contact:name')}} :</label>
    {!! Form::select('contact_name', $contacts, null, ['class' => 'form-control']) !!}
</div>

<!-- Deadline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deadline', trans('app.general:deadline') . " :" )  !!}
    {!! Form::text('deadline', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', trans('app.general:description') . " :" )  !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Special Conditions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('special_conditions', trans('app.contact:special-conditions') . " :" )  !!}
    {!! Form::text('special_conditions', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', trans('app.general:address') . " :" )  !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Zipcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zipcode', trans('app.general:zipcode') . " :" ) !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', trans('app.general:city') . " :" ) !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', trans('app.general:country') . " :" ) !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Quote Field -->
<div class="form-group col-sm-6">
    <label for="quote_name">{{trans('app.general:quote')}} :</label>
    {!! Form::select('quote_name', $quotes, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit( trans('app.general:save-changes'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invoices.index') !!}" class="btn btn-default">Cancel</a>
</div>
