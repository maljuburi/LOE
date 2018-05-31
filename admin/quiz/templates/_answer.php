
<?php
$edit_ans = $results[0]->answer;
?>

<div class="form-group quiz-form-group row">

<label class="quiz-lbl col-md-12">Select Right Answer :</label>

<select class="form-control col-md-12" name="answer" id="answer" required>
  <option value="">Right Answer</option>
  <option value="A" <?php if($edit_ans==$edit_ch1 && !empty($edit_ans)){ echo "selected" ;} ?> >A</option>
  <option value="B" <?php if($edit_ans==$edit_ch2 && !empty($edit_ans)){ echo "selected" ;} ?> >B</option>
  <option value="C" <?php if($edit_ans==$edit_ch3 && !empty($edit_ans)){ echo "selected" ;} ?> >C</option>
  <option value="D" <?php if($edit_ans==$edit_ch4 && !empty($edit_ans)){ echo "selected" ;} ?> >D</option>
</select>


</div>