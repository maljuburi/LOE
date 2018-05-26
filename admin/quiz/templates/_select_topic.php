
<?php 

  $beginnerPage =  get_page_by_title('beginner');
  $intermediatePage = get_page_by_title('intermediate');
  $advancePage = get_page_by_title('advance');

  $args = array('post_type' => 'page');
  $pagesQuery = new WP_Query();
  $allPages = $pagesQuery->query($args);

  $BeginnerChildren = get_page_children( $beginnerPage->ID, $allPages );
  $IntermediateChildren = get_page_children( $intermediatePage->ID, $allPages );
  $AdvanceChildren = get_page_children( $advancePage->ID, $allPages );
 
  ?>

<div class="form-group quiz-form-group row">
<label class="quiz-lbl col-md-12"> Select Topic :</label>
<!-- Add Fields To Quiz Page Below -->
<select class="form-control col-md-12" name="topic" required>
  <option value="">Select the Topic</option>
  <?php
  foreach ($BeginnerChildren as $bChild){
      ?>
      <option value="<?php echo $beginnerPage->post_title . "-" . $bChild->post_title ?>"><?php echo $beginnerPage->post_title . " - " . $bChild->post_title ?></option>
  <?php
    }
    
    foreach ($IntermediateChildren as $iChild){
      ?>
      <option value="<?php echo $intermediatePage->post_title . "-" . $iChild->post_title ?>"><?php echo $intermediatePage->post_title . " - " . $iChild->post_title ?></option>
  <?php
    }

    foreach ($AdvanceChildren as $aChild){
      ?>
      <option value="<?php echo $advancePage->post_title . "-" . $aChild->post_title ?>"><?php echo $advancePage->post_title . " - " . $aChild->post_title ?></option>
  <?php
    }
  
  ?>
</select>
</div>