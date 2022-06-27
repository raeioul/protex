<div class="form-group {{ $errors->has('eta') ? 'has-error' : ''}}">
    <label for="eta" class="control-label">{{ 'Eta' }}</label>
    <input class="form-control" name="eta" type="date" id="eta" value="{{ isset($eta->eta) ? $eta->eta : ''}}" >
    {!! $errors->first('eta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('operation_id') ? 'has-error' : ''}} d-none">
    <label for="operation_id" class="control-label">{{ 'Operation Id' }}</label>
    <input class="form-control" name="operation_id" type="number" id="operation_id" value="{{isset($item->operation_id)?
        $item->operation_id:
        isset($item->id)?$item->id:$eta->operation_id}}">
    {!! $errors->first('operation_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
