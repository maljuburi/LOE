
<div class="quiz-wrapper">
  
  <h3>Results</h3><br>
  <?php for ($r=0; $r < count($results); $r++) {

    if(!empty($selected[$r])){
      if($selected[$r] === $ans[$r]){
        $ansStyle = "text-success";
        $styleSign = "&#10003;";
      }else{
        $ansStyle = "text-danger";
        $styleSign = "&#10007;";
      }
      
      ?>
      <div class="question-wrapper">
        <small class="float-right text-muted"><?php echo $grade[$r]; ?> Points</small>
        <p><strong><?php echo $r+1; ?>: <?php echo $question[$r]; ?> </strong></p>
        <p>Selected : <span class="<?php echo $ansStyle; ?>"><?php echo $selected[$r]; ?> <span class="display-4"><?php echo $styleSign ?></span></span></p>
        <p>Correct Answer : <?php echo $ans[$r]; ?></p>
      </div>
    <?php }else{ ?>
      <div class="question-wrapper">
        <small class="float-right text-muted"><?php echo $grade[$r]; ?> Points</small>
        <p><strong><?php echo $r+1 ?>: <?php echo $question[$r]; ?> </strong></p>
        <p>Selected : <span class="text-danger"> Was not selected! </span></p>
        <p>Correct Answer : <?php echo $ans[$r]; ?></p>
      </div>
    <?php } ?>
  
  <?php }?>

</div>

