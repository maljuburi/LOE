 <?php
 require_once( get_template_directory() . '/admin/quiz-table/quiz-table-config.php');
 ?>
 
<div class="wrapper">
  <h3 class="header">Display Quizes</h3>
  <div class="container">
    <table class="quizes_table" style="width:100%">
      <tr class="header_tr">
        <th>Level</th>
        <th>Topic</th>
        <th>Question</th>
        <th>Choices</th> 
        <th>Answer</th>
      </tr>
      <?php
      if(!empty($results)){
        foreach($results as $result){ ?>
        
        
          <tr class="data_tr">
            <td class="data_td"><?php echo $result->topic_level ?></td>
            <td class="data_td"><?php echo $result->topic ?></td>
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
          </tr>
        <?php } ?>
          
    <?php } else { ?>
      <tr>
        <td class="data_td text-center" colspan="5">There are no quizes available to display</td>
      </tr>
    <?php }?>

    </table>
  </div> <!-- container       -->
</div> <!-- wrapper       -->