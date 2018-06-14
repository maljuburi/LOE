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




<?php if(isset($success)){echo $success;} ?>
<div class="wrapper">
  <h3 class="header"><?php echo get_admin_page_title(); ?></h3>
  <div style="overflow-x: auto;">
    <table class="quizes_table" style="width:100%">
      <tr class="header_tr">
        <th>Level</th>
        <th>Unit</th>
        <th>Topic</th>
        <th>Image/Video/Audio</th>
        <th>YouTube</th>
        <th>Question</th>
        <th>Choices</th>
        <th>Answer</th>
        <th>Grade</th>
        <th>&#9998; Edit</th>
        <th>&#10008; Delete</th>
      </tr>
      <?php
      if(!empty($results)){
        foreach($results as $result){ ?>
        
          <tr class="data_tr">
            <td class="data_td"><?php echo $result->topic_level ?></td>
            <td class="data_td"><?php echo $result->unit ?></td>
            <td class="data_td"><?php echo $result->topic ?></td>
            <td class="data_td text-center">
              <ul>
                <?php if($result->img != ""){ ?> <li>Image <br><img class="quiz_table_thumb" width="100" src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/image/". $result->img?>"> <?php }?></li>
                <?php if($result->vid != ""){ ?> <li>Video <br><video class="quiz_table_thumb" width="100" controls  > <source src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/video/". $result->vid ?>" type="video/mp4"> </video> <?php }?></li>
                <?php if($result->aud != ""){ ?> <li>Audio <br><audio class="quiz_table_thumb" style="width: 100px" controls  > <source src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/audio/". $result->aud ?>" type="audio/mpeg"> <source src="<?php echo get_template_directory_uri()."/assets/quiz-uploads/audio/". $result->aud ?>" type="audio/wav"> </audio> <?php }?></li>
              </ul>
            </td>
            <td class="data_td">
              <div class="iframewrapper">
                <?php if($result->iframeUrl !=""){ echo stripslashes(html_entity_decode($result->iframeUrl)); } ?>
              </div>
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
            <td class="data_td"><?php echo $result->grade ?></td>
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
      <tr class="data_tr">
        <td class="data_td text-center" colspan="11">There isn't any quiz available to display</td>
      </tr>
    <?php }?>

    </table>

    
  </div> <!-- container       -->
</div> <!-- wrapper       -->
