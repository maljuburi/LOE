
<?php
$success='';
require_once( get_template_directory() . '/admin/quiz/quiz-config.php');

if($_POST['updateQuiz']||$_POST['update_submit']){
  require_once( get_template_directory() . '/admin/quiz/templates/edit-quiz.php');
}else{
  require_once( get_template_directory() . '/admin/quiz/templates/add-quiz.php');
}

?>


