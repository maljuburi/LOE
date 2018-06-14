<?php

if(isset($_POST['quizId'])){
    
    $quizId = $_POST['quizId'];
    $results = $wpdb->get_results("
    SELECT * FROM $table_name WHERE id=$quizId;
    ");
    
    $edit_level = $results[0]->topic_level;
    $edit_unit = $results[0]->unit;
    $edit_topic = $results[0]->topic;
    $edit_question = $results[0]->question;
    $edit_ch1 = $results[0]->ch1;
    $edit_ch2 = $results[0]->ch2;
    $edit_ch3 = $results[0]->ch3;
    $edit_ch4 = $results[0]->ch4;
    $edit_ans = $results[0]->answer;
    $edit_grade = $results[0]->grade;
}
?>



<?php 


if(isset($_POST['update_submit'])){

    // disable buttons
    $disabled = "disabled";

  // Image Data
  // ==============
  $img = $_FILES['img'];
  $imgName = $img['name'];
  $imgTmpName = $img['tmp_name'];
  $imgSize = $img['size'];
  $imgError = $img['error'];
  $imgType = $img['type'];

  // Audio Data
  // ==============
  $aud = $_FILES['aud'];
  $audName = $aud['name'];
  $audTmpName = $aud['tmp_name'];
  $audSize = $aud['size'];
  $audError = $aud['error'];
  $audType = $aud['type'];

  // Video Data
  // ==============
  $vid = $_FILES['vid'];
  $vidName = $vid['name'];
  $vidTmpName = $vid['tmp_name'];
  $vidSize = $vid['size'];
  $vidError = $vid['error'];
  $vidType = $vid['type'];

  // Video URL
  $iframeStr = esc_html($_POST['vidUrl']);
  
  if($imgName != "" || $audName != "" || $vidName != "" || !empty($iframeStr)){

    $allowed = array('jpg','jpeg','png','mp3','wav','mp4');
    $mediaArray = array('img'=>'', 'aud'=>'','vid'=>'', 'iframeStr'=>'');

    if($imgName != ""){
      
      $imgSplit = explode('.',$imgName);
      $imgExt = strtolower(end($imgSplit));
      
      if(in_array($imgExt, $allowed)){
        if($imgError===0){
    
          if($imgSize <= 25000000){
            $newImgName = uniqid("", false).".".$imgExt;
            $imgDestination = get_template_directory().'/assets/quiz-uploads/image/'.$newImgName;
            move_uploaded_file($imgTmpName, $imgDestination);
            $mediaArray['img'] = $newImgName;
          
  
          }else{
            echo "Image is bigger than 25MB";
            return;
          }
    
        }else{
          echo "There was an error uploading the image!";
          return;
        }
    
    
      }else{
        echo "Check type of image, and try again!";
        return;
      }

    }

    if($audName != ""){
      
      $audSplit = explode('.',$audName);
      $audExt = strtolower(end($audSplit));
      
      if(in_array($audExt, $allowed)){
        if($audError===0){
    
          if($audSize <= 25000000){
            $newaudName = uniqid("", false).".".$audExt;
            $audDestination = get_template_directory().'/assets/quiz-uploads/audio/'.$newaudName;
            move_uploaded_file($audTmpName, $audDestination);
            $mediaArray['aud'] = $newaudName;
          
  
          }else{
            echo "Audio is bigger than 25MB";
            return;
          }
    
        }else{
          echo "There was an error uploading the audio!";
          return;
        }
    
    
      }else{
        echo "Check type of audio, and try again!";
        return;
      }

    }

    if($vidName != ""){
      
      $vidSplit = explode('.',$vidName);
      $vidExt = strtolower(end($vidSplit));
      
      if(in_array($vidExt, $allowed)){
        if($vidError===0){
    
          if($vidSize <= 25000000){
            $newvidName = uniqid("", false).".".$vidExt;
            $vidDestination = get_template_directory().'/assets/quiz-uploads/video/'.$newvidName;
            move_uploaded_file($vidTmpName, $vidDestination);
            $mediaArray['vid'] = $newvidName;
          
  
          }else{
            echo "Video is bigger than 25MB";
            return;
          }
    
        }else{
          echo "There was an error uploading the video! ";
        }
    
    
      }else{
        echo "Check type of video, and try again!";
        return;
      }

    }

    if(!empty($iframeStr)){
      $mediaArray['iframeStr'] = $iframeStr;
    }
    
    update_data($mediaArray);
    
  }else{
    $mediaArray = array('img'=>'', 'aud'=>'','vid'=>'', 'iframeStr'=>'');
    update_data($mediaArray);
  }




    $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Quiz has been updated <strong>successfully.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';

    global $wpdb;
    $table_name = $wpdb->prefix . "quiz";
    $results = $wpdb->get_results("
    SELECT * FROM $table_name ORDER BY topic_level;
    ");
  }
  
  function update_data($media){
    
    global $wpdb;
    $table_name = $wpdb->prefix . "quiz";
    

    $quiz_id = $_POST['id'];
    $lvlAndTopic = $_POST['topic'];
    $splitLvl = explode('@',$lvlAndTopic);
    $level = $splitLvl[0];
    $unit = $splitLvl[1];
    $topic = $splitLvl[2];
    $mediaData = $media;
    $question = $_POST['question'];
    $ch1 = $_POST['ch1'];
    $ch2 = $_POST['ch2'];
    $ch3 = $_POST['ch3'];
    $ch4 = $_POST['ch4'];
    $selectedAns = $_POST['answer'];
    $grade = $_POST['grade'];

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


    $thumbFolder = get_template_directory()."/assets/quiz-uploads";
    $deleteOldImg = $wpdb->get_results("SELECT img from $table_name WHERE id=$quiz_id;");
    $deleteOldAud = $wpdb->get_results("SELECT aud from $table_name WHERE id=$quiz_id;");
    $deleteOldVid = $wpdb->get_results("SELECT vid from $table_name WHERE id=$quiz_id;");
    if(!empty($deleteOldImg[0]->img)){
      $thumbPath = $thumbFolder."/image/".$deleteOldImg[0]->img;
      if(file_exists($thumbPath)){
        unlink($thumbPath);
      }
    }
    if(!empty($deleteOldAud[0]->aud)){
      $thumbPath = $thumbFolder."/audio/".$deleteOldAud[0]->aud;
      if(file_exists($thumbPath)){
        unlink($thumbPath);
      }
    }
    if(!empty($deleteOldVid[0]->vid)){
      $thumbPath = $thumbFolder."/video/".$deleteOldVid[0]->vid;
      if(file_exists($thumbPath)){
        unlink($thumbPath);
      }
    }

    $update = $wpdb->update($table_name, array(
      'topic_level' => $level,
      'unit'        => $unit,
      'topic'       => $topic,
      'img'         => $mediaData['img'],
      'aud'         => $mediaData['aud'],
      'vid'         => $mediaData['vid'],
      'iframeUrl'   => $mediaData['iframeStr'],
      'question'    => $question,
      'ch1'         => $ch1,
      'ch2'         => $ch2,
      'ch3'         => $ch3,
      'ch4'         => $ch4,
      'answer'      => $answer,
      'grade'       => $grade
    ), array('id'=> $quiz_id));



}

?>

<?php if(isset($success)){echo $success;} ?>
    <div class="wrapper">

    <?php if(isset($_POST['update_submit'])) { ?>
        <h3 class="header">Updated Successfully.</h3>
        <a href="admin.php?page=LOE_quiz_table_page" class="btn quiz-btn btn-primary mb-2">View Quizes</a>
        <div class="container">
            
        </div>
    <?php }else{?>

    <h3 class="header">Edit Quiz</h3>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

        <?php
            require_once( get_template_directory() . '/admin/quiz/templates/_select_topic.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_upload_media.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_quiz_question.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_question_choices.php');
            require_once( get_template_directory() . '/admin/quiz/templates/_answer.php');
            require_once( get_template_directory() . '/admin/quiz/templates/quiz_grade.php');
            ?>

            <div class="form-group quiz-form-group row">
                <input type="hidden" name="id" value="<?php echo $quizId ?>">
                <button type="submit" name="update_submit" class="btn quiz-btn btn-success mb-2">Update Quiz</button>
                <a href="admin.php?page=LOE_quiz_table_page" class="btn quiz-btn btn-danger mb-2">Cancel</a>
            </div>
        </form>
        <?php } ?>
        
    </div>
</div>
