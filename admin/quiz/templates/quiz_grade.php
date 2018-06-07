<div class="form-group quiz-form-group row">
<label class="quiz-lbl col-md-12" for="question">Quiz Grade : </label>
<select class="form-control col-md-12" name="grade" id="grade">
    <option value="">Select a grade</option>
    <option value="1"   <?php if(isset($edit_grade)){ if($edit_grade==1){echo "selected";}} ?>>1</option>
    <option value="2"   <?php if(isset($edit_grade)){ if($edit_grade==2){echo "selected";}} ?>>2</option>
    <option value="5"   <?php if(isset($edit_grade)){ if($edit_grade==5){echo "selected";}} ?>>5</option>
    <option value="10"  <?php if(isset($edit_grade)){ if($edit_grade==10){echo "selected";}} ?>>10</option>
    <option value="25"  <?php if(isset($edit_grade)){ if($edit_grade==25){echo "selected";}} ?>>25</option>
    <option value="100" <?php if(isset($edit_grade)){ if($edit_grade==100){echo "selected";}} ?>>100</option>
</select>
</div>