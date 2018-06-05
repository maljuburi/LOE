


<!--====== Add the Quiz Below ======= -->
    <div class="container quiz-wrapper">
      <form action="" method="post">
        
        <?php for($i=0; $i < count($results); $i++){ ?>

        <div class="question-wrapper">
          <label class="question-title">Question <?php echo $i+1 ?>: </label>
          <p><?php echo $results[$i]->question  ?></p>
          <?php if(!empty($results[$i]->img)){ ?><img class="quiz-image" src="<?php echo get_template_directory_uri()."/img/quiz-uploads/".$results[$i]->img ?>" alt="quiz image"><?php } ?>
          
          A . <input type="radio" name="choice<?php echo $i+1 ?>" value="<?php echo $results[$i]->ch1 ?>" id="ch<?php echo ($i*4)+1 ?>"> <label for="ch<?php echo ($i*4)+1 ?>"><?php echo $results[$i]->ch1 ?></label><br>
          B . <input type="radio" name="choice<?php echo $i+1 ?>" value="<?php echo $results[$i]->ch2 ?>" id="ch<?php echo ($i*4)+2 ?>"> <label for="ch<?php echo ($i*4)+2 ?>"><?php echo $results[$i]->ch2 ?></label><br>
          C . <input type="radio" name="choice<?php echo $i+1 ?>" value="<?php echo $results[$i]->ch3 ?>" id="ch<?php echo ($i*4)+3 ?>"> <label for="ch<?php echo ($i*4)+3 ?>"><?php echo $results[$i]->ch3 ?></label><br>
          D . <input type="radio" name="choice<?php echo $i+1 ?>" value="<?php echo $results[$i]->ch4 ?>" id="ch<?php echo ($i*4)+4 ?>"> <label for="ch<?php echo ($i*4)+4 ?>"><?php echo $results[$i]->ch4 ?></label><br>

          <input type="hidden" name="level" value="<?php echo $level  ?>">
					<input type="hidden" name="topic" value="<?php echo $topic  ?>">
        </div>
      
        <?php
              }
        
        ?>
        

        <input class="<?php echo $level?>-quiz-btn" type="submit" name="submit-quiz" value="Finish Quiz" >
      </form>
    </div>
