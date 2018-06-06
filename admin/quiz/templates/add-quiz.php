<?php

if(isset($_POST['submit'])){
  
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
  
  if($imgName != "" || $audName != "" || $vidName != ""){

    $allowed = array('jpg','jpeg','png','mp3','wav','mp4');
    $mediaArray = array('img'=>'', 'aud'=>'','vid'=>'');

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
          echo "There was an error uploading the video!";
          return;
        }
    
    
      }else{
        echo "Check type of video, and try again!";
        return;
      }

    }

    
    insert_data($mediaArray);
    
  }else{
    $mediaArray = array('img'=>'', 'aud'=>'','vid'=>'');
    insert_data($mediaArray);
  }

  $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Quiz has been added <strong>successfully.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
}

function insert_data($media){
  
  $lvlAndTopic = $_POST['topic'];
  $splitLvl = explode('-',$lvlAndTopic);
  $level = $splitLvl[0];
  $topic = $splitLvl[1];
  $mediaData = $media;
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

  $result = $wpdb->insert('wp_quiz', array(
    'topic_level'   => $level,
    'topic'         => $topic,
    'img'           => $mediaData['img'],
    'aud'           => $mediaData['aud'],
    'vid'           => $mediaData['vid'],
    'question'      => $question,
    'ch1'           => $ch1,
    'ch2'           => $ch2,
    'ch3'           => $ch3,
    'ch4'           => $ch4,
    'answer'        => $answer
  ));
}

?>




<?php if(isset($success)){echo $success;} ?>
  <div class="wrapper">
    <h3 class="header">Add Quiz</h3>
    <div class="container">
        <form action="" name="add_quiz" method="post" enctype="multipart/form-data">
          
        <?php
          
          require_once( get_template_directory() . '/admin/quiz/templates/_select_topic.php');
          require_once( get_template_directory() . '/admin/quiz/templates/_upload_media.php');
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