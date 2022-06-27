<div class="row">
  <div class="form-group {{ $errors->has('etd') ? 'has-error' : ''}} col-md-3">
      <label for="etd" class="control-label">{{ 'Etd' }}</label>
      <input class="form-control" name="etd" type="date" id="etd" value="{{ isset($operation->etd) ? $operation->etd : ''}}" >
      {!! $errors->first('etd', '<p class="help-block">:message</p>') !!}
  </div>
</div>
<br/>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>