<?php

$quizId = $_POST['quizId'];
$results = $wpdb->get_results("
SELECT * FROM $table_name WHERE id=$quizId;
");

?>


<?php echo $success; ?>
    <div class="wrapper">
    <h3 class="header">Edit Quiz</h3>
    <div class="container">
        <form action="admin.php?page=LOE_quiz_table_page" method="post">
            
        <?php
            
            require_once( get_template_directory() . '/admin/quiz/templates/_select_topic.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_quiz_question.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_question_choices.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_answer.php');
        ?>
        <div class="form-group quiz-form-group row">
            <input type="hidden" name="id" value="<?php echo $quizId ?>">
            <button type="submit" name="update_submit" class="btn quiz-btn btn-success mb-2">Update Quiz</button>
            <a href="admin.php?page=LOE_quiz_table_page" class="btn quiz-btn btn-danger mb-2">Cancel</a>
        </div>
        </form>
        
    </div>
</div>