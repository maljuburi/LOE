<?php
$edit_ch1 = $results[0]->ch1;
$edit_ch2 = $results[0]->ch2;
$edit_ch3 = $results[0]->ch3;
$edit_ch4 = $results[0]->ch4;
?>

<div class="form-group quiz-form-group row">
<label class="quiz-lbl col-md-12" for="A">Enter Choices</label>

<input id="A" class="form-control col-md-12" type="text" name="ch1" placeholder="A" <?php if($edit_ch1){echo "value='$edit_ch1'"; } ?> required> <br>
<input id="B" class="form-control col-md-12" type="text" name="ch2" placeholder="B" <?php if($edit_ch2){echo "value='$edit_ch2'"; } ?> required> <br>
<input id="C" class="form-control col-md-12" type="text" name="ch3" placeholder="C" <?php if($edit_ch3){echo "value='$edit_ch3'"; } ?> required> <br>
<input id="D" class="form-control col-md-12" type="text" name="ch4" placeholder="D" <?php if($edit_ch4){echo "value='$edit_ch4'"; } ?> required> <br>

</div>