
<?php


$level = $_POST['level'];
$topic = $_POST['topic'];

global $wpdb;
$table_name = $wpdb->prefix . "quiz";
$query = "SELECT * FROM $table_name WHERE topic_level='$level' AND topic='$topic'";
$results = $wpdb->get_results(htmlspecialchars_decode($query));

$totalGrade = count($results);
$resultGrade = count($results);


if (!empty($results)){ 


	$pageHTML= get_template_directory() . '/inc/templates/LOE-quiz.php';

	if(isset($_POST['submit-quiz'])){

		
		// loop to check answers
		for($j=1; $j <= count($results); $j++){
			
			$question[$j-1] = $results[$j-1]->question;
			$ans[$j-1] = $results[$j-1]->answer;
			if(isset($_POST["choice$j"])){

				$selected[$j-1] = $_POST["choice$j"];
	
				if($selected[$j-1] != $ans[$j-1]){
					$resultGrade = $resultGrade -1;
				}

			}else{
				$resultGrade = $resultGrade -1;
			}

			
		}


		$resultMsg= "Your result is:".$resultGrade;
		$pageHTML = get_template_directory() . '/inc/templates/LOE-quiz-result.php';
		

	}
}else{
    echo "<br><h3 class='text-center'>Quiz is not available yet!</h3>";
  }




?>



<?php get_header();?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 page">

			
				
				<h4 class="<?php echo $_POST['level'] ?>-quiz-title display-4"> <a href="<?php echo $_POST['level'] ?>"><?php echo $_POST['level'] ?></a> | <a href="<?php echo $_POST['level']."/".$_POST['topic'] ?>"><?php echo $_POST['topic'] ?></a> | Quiz</h4>
				<!-- =========================
				 Add the template you need below
				 ================================== -->
        <?php require_once $pageHTML; ?>
        

			</div>



		
			<!-- Quiz Instructions -->
			<div class="col-md-4 sidebar">
				<div class="quiz-tips">
          <h4>Quiz Instructions:</h4>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente aperiam excepturi alias eius accusamus corrupti itaque nam placeat rerum impedit! Nemo vitae natus, vel at asperiores unde hic voluptate nesciunt.</p>
          <p><strong>Quiz Total Grade is:<span class="text-primary display-3"> <?php echo $totalGrade ?> </span></strong> </p>
        </div>
			</div>	
		</div>
	</div>
</div>


<?php get_footer();?>