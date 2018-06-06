<?php

if(isset($_POST['quizId'])){
    
    $quizId = $_POST['quizId'];
    $results = $wpdb->get_results("
    SELECT * FROM $table_name WHERE id=$quizId;
    ");
    
    $edit_level = $results[0]->topic_level;
    $edit_topic = $results[0]->topic;
    $edit_image = $results[0]->img;
    $edit_audio = $results[0]->aud;
    $edit_video = $results[0]->vid;
    $edit_question = $results[0]->question;
    $edit_ch1 = $results[0]->ch1;
    $edit_ch2 = $results[0]->ch2;
    $edit_ch3 = $results[0]->ch3;
    $edit_ch4 = $results[0]->ch4;
    $edit_ans = $results[0]->answer;
}
?>


<?php if(isset($success)){echo $success;} ?>
    <div class="wrapper">
    <h3 class="header">Edit Quiz</h3>
    <div class="container">
        <form action="admin.php?page=LOE_quiz_table_page" method="post" enctype="multipart/form-data">
            
        <?php
            require_once( get_template_directory() . '/admin/quiz/templates/_select_topic.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_upload_image.php');
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
