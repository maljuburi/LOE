<?php
require_once( get_template_directory() . '/admin/quiz-table/quiz-table-config.php');
?>


<?php 
// Delete Quiz
// =============
if(isset($_POST['deleteQuiz'])){
  $quiz_id = $_POST['quizId'];
  $table_name = $wpdb->prefix . "quiz";
  
  $thumbFolder = get_template_directory()."/img/quiz-uploads";
  $deleteImg = $wpdb->get_results("SELECT img from $table_name WHERE id=$quiz_id;");
  if(!empty($deleteImg[0]->img)){
    $thumbPath = $thumbFolder."/".$deleteImg[0]->img;
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
          update_data($newImgName);
        

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
    update_data($newImgName);
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
  
  function update_data($img){
    
    global $wpdb;
    $table_name = $wpdb->prefix . "quiz";
    

    $quiz_id = $_POST['id'];
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


    $thumbFolder = get_template_directory()."/img/quiz-uploads";
    $deleteOld = $wpdb->get_results("SELECT img from $table_name WHERE id=$quiz_id;");
    if(!empty($deleteOld[0]->img)){
      $thumbPath = $thumbFolder."/".$deleteOld[0]->img;
      if(file_exists($thumbPath)){
        unlink($thumbPath);
      }
    }

    $update = $wpdb->update($table_name, array(
      'topic_level' => $level,
      'topic'       => $topic,
      'img'       => $image,
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
        <th>Image</th>
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
            <td class="data_td text-center"><?php if($result->img != ""){ ?><img class="quiz_table_thumb" width="150" src="<?php echo get_template_directory_uri()."/img/quiz-uploads/". $result->img?>"> <?php }?> </td>
            <td class="data_td"><?php echo $result->question ?></td>
            <td class="data_td">
              <ul>
                <li><?php echo $result->ch1 ?></li>
                <li><?php echo $result->ch2 ?></li>
                <li><?php echo $result->ch3 ?></li>
                <li><?php echo $result->ch4 ?></li>
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
