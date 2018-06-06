<?php
require_once( get_template_directory() . '/admin/quiz-table/quiz-table-config.php');
?>


<?php 
// Delete Quiz
// =============
if(isset($_POST['deleteQuiz'])){
  $quiz_id = $_POST['quizId'];
  $table_name = $wpdb->prefix . "quiz";
  
  $thumbFolder = get_template_directory()."/assets/quiz-uploads";
  $deleteImg = $wpdb->get_results("SELECT img from $table_name WHERE id=$quiz_id;");
  $deleteAud = $wpdb->get_results("SELECT aud from $table_name WHERE id=$quiz_id;");
  $deleteVid = $wpdb->get_results("SELECT vid from $table_name WHERE id=$quiz_id;");
  if(!empty($deleteImg[0]->img)){
    $thumbPath = $thumbFolder."/image/".$deleteImg[0]->img;
    if(file_exists($thumbPath)){
      unlink($thumbPath);
    }
  }

  if(!empty($deleteAud[0]->aud)){
    $thumbPath = $thumbFolder."/audio/".$deleteAud[0]->aud;
    if(file_exists($thumbPath)){
      unlink($thumbPath);
    }
  }

  if(!empty($deleteVid[0]->vid)){
    $thumbPath = $thumbFolder."/video/".$deleteVid[0]->vid;
    if(file_exists($thumbPath)){
      unlink($thumbPath);
    }
  }


  $results = $wpdb->get_results("DELETE FROM $table_name WHERE id=$quiz_id;");
  
  $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY topic_level;");
  
  $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Quiz has been deleted <strong>successfully.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';


}

?>


<?php 


if(isset($_POST['update_submit'])){

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

    
    update_data($mediaArray);
    
  }else{
    $mediaArray = array('img'=>'', 'aud'=>'','vid'=>'');
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
      'topic'       => $topic,
      'img'         => $mediaData['img'],
      'aud'         => $mediaData['aud'],
      'vid'         => $mediaData['vid'],
      'question'    => $question,
      'ch1'         => $ch1,
      'ch2'         => $ch2,
      'ch3'         => $ch3,
      'ch4'         => $ch4,
      'answer'      => $answer
    ), array('id'=> $quiz_id));

}

?>



<?php if(isset($success)){echo $success;} ?>
<div class="wrapper">
  <h3 class="header"><?php echo get_admin_page_title(); ?></h3>
  <div class="container" style="overflow-x: auto;">
    <table class="quizes_table" style="width:100%">
      <tr class="header_tr">
        <th>Level</th>
        <th>Topic</th>
        <th>Image/Audio/Video</th>
        <th>Question</th>
        <th>Choices</th> 
        <th>Answer</th>
        <th>&#9998; Edit</th>
        <th>&#10008; Delete</th>
      </tr>
      <?php
      if(!empty($results)){
        foreach($results as $result){ ?>
        
          <tr class="data_tr">
            <td class="data_td"><?php echo $result->topic_level ?></td>
            <td class="data_td"><?php echo $result->topic ?></td>
            <td class="data_td text-center">
              <ul>
                <li><?php if($result->img != ""){ ?>Image <br><img class="quiz_table_thumb" width="100" src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/image/". $result->img?>"> <?php }?></li>
                <li><?php if($result->aud != ""){ ?>Audio <br><audio controls  class="quiz_table_thumb" style="width:100px" > <source src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/audio/". $result->aud ?>" type="audio/mpeg"> <source src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/audio/". $result->aud ?>" type="audio/wav"> </audio> <?php }?></li>
                <li><?php if($result->vid != ""){ ?>Video <br><video controls class="quiz_table_thumb" width="100"> <source src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/video/". $result->vid ?>" type="video/mp4"> </video> <?php }?></li>
              </ul>
            </td>
            <td class="data_td"><?php echo $result->question ?></td>
            <td class="data_td">
              <ul>
                <li class="table-choices"><?php echo $result->ch1 ?></li>
                <li class="table-choices"><?php echo $result->ch2 ?></li>
                <li class="table-choices"><?php echo $result->ch3 ?></li>
                <li class="table-choices"><?php echo $result->ch4 ?></li>
              </ul>
            </td>
            <td class="data_td"><?php echo $result->answer ?></td>
            <td class="data_td text-center">
              <form action="admin.php?page=LOE_theme_options" method="post">
                <input type="hidden" name="quizId" value="<?php echo $result->id ?>">
                <input type="submit" name="updateQuiz" class="btn btn-edit btn-sm" value="&#9998; Edit">
              </form>
            </td>


            <td class="data_td text-center">
              <form action="" method="post">
                <input type="hidden" name="quizId" value="<?php echo $result->id ?>">
                <input type="submit" name="deleteQuiz" class="btn btn-delete btn-sm" value="&#10008; Delete">
              </form>
            </td>
          </tr>
        <?php } ?>
          
    <?php } else { ?>
      <tr>
        <td class="data_td text-center" colspan="8">There are no quizes available to display</td>
      </tr>
    <?php }?>

    </table>

    
  </div> <!-- container       -->
</div> <!-- wrapper       -->
