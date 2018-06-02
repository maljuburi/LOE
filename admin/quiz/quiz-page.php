
<?php
require_once( get_template_directory() . '/admin/quiz/quiz-config.php');

if(isset($_POST['updateQuiz']) || isset($_POST['update_submit'])){

  if(isset($_POST['updateQuiz'])){
    $updateQuiz = $_POST['updateQuiz'];
    require_once( get_template_directory() . '/admin/quiz/templates/edit-quiz.php');
  }
  if(isset($_POST['update_submit'])){
    $updateQuiz = $_POST['update_submit']; 
    require_once( get_template_directory() . '/admin/quiz/templates/edit-quiz.php');
  }

}else{
  require_once( get_template_directory() . '/admin/quiz/templates/add-quiz.php');
}

?>


