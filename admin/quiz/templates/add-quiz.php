<?php

if(isset($_POST['submit'])){
  insert_data();
  $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Quiz has been added <strong>successfully.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
}

function insert_data(){
  $lvlAndTopic = $_POST['topic'];
  $splitLvl = explode('-',$lvlAndTopic);
  $level = $splitLvl[0];
  $topic = $splitLvl[1];
  $question = $_POST['question'];
  $ch1 = $_POST['ch1'];
  $ch2 = $_POST['ch2'];
  $ch3 = $_POST['ch3'];
  $ch4 = $_POST['ch4'];
  $selectedAns = $_POST['answer'];

  switch ($selectedAns) {
    case "A":
        $answer = $ch1;
        break;
    case "B":
        $answer = $ch2;
        break;
    case "C":
        $answer = $ch3;
        break;
    case "D":
        $answer = $ch4;
        break;
}
  
  global $wpdb;
  $wpdb->insert('wp_quiz', array(
    'topic_level' => $level,
    'topic' => $topic,
    'question' => $question,
    'ch1' => $ch1,
    'ch2' => $ch2,
    'ch3' => $ch3,
    'ch4' => $ch4,
    'answer' => $answer
));

}

?>




<?php echo $success; ?>
  <div class="wrapper">
    <h3 class="header">Add Quiz</h3>
    <div class="container">
        <form action="" name="add_quiz" method="post">
          
        <?php
          
          require_once( get_template_directory() . '/admin/quiz/templates/_select_topic.php');
          require_once( get_template_directory() . '/admin/quiz/templates/_quiz_question.php');
          require_once( get_template_directory() . '/admin/quiz/templates/_question_choices.php');
          require_once( get_template_directory() . '/admin/quiz/templates/_answer.php');
        ?>
        <div class="form-group quiz-form-group row">
          <button type="submit" name="submit" class="btn quiz-btn btn-success mb-2">Add Quiz</button>
          <button type="reset" class="btn quiz-btn btn-primary mb-2">Reset</button>
        </div>
        </form>
        
    </div>
</div>