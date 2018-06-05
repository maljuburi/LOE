<?php

if(isset($_POST['submit'])){
  
  $img = $_FILES['img'];
  $imgName = $img['name'];
  $imgTmpName = $img['tmp_name'];
  $imgSize = $img['size'];
  $imgError = $img['error'];
  $imgType = $img['type'];
  
  if($imgName != ""){
    $imgSplit = explode('.',$imgName);
    $imgExt = strtolower(end($imgSplit));
    $allowed = array('jpg','jpeg','png');
  
    if(in_array($imgExt, $allowed)){
      if($imgError===0){
  
        if($imgSize <= 5000000){
          $newImgName = uniqid("", false).".".$imgExt;
          $imgDestination = get_template_directory().'/img/quiz-uploads/'.$newImgName;
          move_uploaded_file($imgTmpName, $imgDestination);
          insert_data($newImgName);
        

        }else{
          echo "File is bigger than 5MB";
          return;
        }
  
      }else{
        echo "There was an error uploading the file!";
        return;
      }
  
  
    }else{
      echo "You cannot upload files of this type!";
      return;
    }
  }else{
    $newImgName = "";
    insert_data($newImgName);
  }

  $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Quiz has been added <strong>successfully.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
}

function insert_data($img){
  
  $lvlAndTopic = $_POST['topic'];
  $splitLvl = explode('-',$lvlAndTopic);
  $level = $splitLvl[0];
  $topic = $splitLvl[1];
  $image = $img;
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
    'img'           => $image,
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
          require_once( get_template_directory() . '/admin/quiz/templates/_upload_image.php');
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