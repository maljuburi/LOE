
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
    foreach($BeginnerChildren as $bPage){
        if($bPage->post_parent){
            $parent = get_post($bPage->post_parent);
            
            if($parent->post_parent){
                $grandParent = get_post($parent->post_parent);
                $bTopic = $bPage;

                if($grandParent == $beginnerPage){
                    $bUnit = $parent;

                    ?>
                    <option value="<?php echo $beginnerPage->post_title . "@" . $bUnit->post_title. "@" . $bTopic->post_title ?>" <?php if(isset($edit_level)){ if($edit_level==$beginnerPage->post_title && $edit_unit == $bUnit->post_title && $edit_topic == $bTopic->post_title){ echo "selected" ;}} ?>><?php echo $beginnerPage->post_title . " - " . $bUnit->post_title. " - " . $bTopic->post_title ?></option>
                    <?php
                }
                
            }
        }
    }

?>

<?php 
    foreach($IntermediateChildren as $iPage){
        if($iPage->post_parent){
            $parent = get_post($iPage->post_parent);
            
            if($parent->post_parent){
                $grandParent = get_post($parent->post_parent);
                $iTopic = $iPage;

                if($grandParent == $intermediatePage){
                    $iUnit = $parent;

                    ?>
                    <option value="<?php echo $intermediatePage->post_title . "@" . $iUnit->post_title. "@" . $iTopic->post_title ?>" <?php if(isset($edit_level)){ if($edit_level==$intermediatePage->post_title && $edit_unit == $iUnit->post_title && $edit_topic == $iTopic->post_title){ echo "selected" ;}} ?>><?php echo $intermediatePage->post_title . " - " . $iUnit->post_title. " - " . $iTopic->post_title ?></option>
                    <?php
                }
                
            }
        }
    }

?>

<?php 
    foreach($AdvanceChildren as $aPage){
        if($aPage->post_parent){
            $parent = get_post($aPage->post_parent);
            
            if($parent->post_parent){
                $grandParent = get_post($parent->post_parent);
                $aTopic = $aPage;

                if($grandParent == $advancePage){
                    $aUnit = $parent;

                    ?>
                    <option value="<?php echo $advancePage->post_title . "@" . $aUnit->post_title. "@" . $aTopic->post_title ?>" <?php if(isset($edit_level)){ if($edit_level==$advancePage->post_title && $edit_unit == $aUnit->post_title && $edit_topic == $aTopic->post_title){ echo "selected" ;}} ?>><?php echo $advancePage->post_title . " - " . $aUnit->post_title. " - " . $aTopic->post_title ?></option>
                    <?php
                }
                
            }
        }
    }

?>

</select>
</div>