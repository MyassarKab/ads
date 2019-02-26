
<div class="clearfix"></div>
<label>Select Brand <span>*</span></label>
<select class="Brand" name="brand_id" required onchange="AddType()" id="Brand">
<option value="0" selected="true" disabled="disabled">Select Brand </option>
<?php foreach ($brand as $key => $value): ?>
    <option value="{{$value->id}}">{{$value->name_en}}</option>
<?php endforeach; ?>
</select>

<?php if (count($Type) > 0): ?>
  <div class="clearfix"></div>
  <label>Select Type <span>*</span></label>
  <select class="type" name="type_id" required  id="type">
  <option value="0" selected="true" disabled="disabled">Select Brand  before</option>

  </select>

<?php endif; ?>
