
<?php $edit_question = $results[0]->question; ?>

<div class="form-group quiz-form-group row">
<label class="quiz-lbl col-md-12" for="question">Enter Question :</label>


<textarea class="form-control col-md-12" name="question" id="question" cols="40" rows="7" required><?php if($edit_question){echo $edit_question;} ?></textarea><br>
</div>