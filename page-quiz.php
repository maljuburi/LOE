<?php get_header();?>


<?php

if(!empty($_POST['level']) && !empty($_POST['topic'])){

	$level = $_POST['level'];
	$unit = $_POST['unit'];
	$topic = $_POST['topic'];

	global $wpdb;
	$table_name = $wpdb->prefix . "quiz";
	$query = "SELECT * FROM $table_name WHERE topic_level='$level' AND unit='$unit' AND topic='$topic'";
	$results = $wpdb->get_results(htmlspecialchars_decode($query));


	$totalGrade = 0;
	foreach($results as $result){
		$totalGrade = (int)$result->grade + $totalGrade;
	}

	$resultGrade = $totalGrade;


	if (!empty($results)){ 


		$pageHTML= get_template_directory() . '/inc/templates/LOE-quiz.php';

		if(isset($_POST['submit-quiz'])){

			
			// loop to check answers
			for($j=1; $j <= count($results); $j++){
				
				// store them for results page
				// -----------------------------
				$question[$j-1] = $results[$j-1]->question;
				$ans[$j-1] = $results[$j-1]->answer;
				$grade[$j-1] = (int)$results[$j-1]->grade;
				// ----------------------------
				

				// if user selected a choice
				// ----------------------------------------------------
				if(isset($_POST["choice$j"])){

					$selected[$j-1] = $_POST["choice$j"];
					
					// if selected = correct answer
					if($selected[$j-1] != $ans[$j-1]){
						$resultGrade = $resultGrade - $grade[$j-1];
					}

				// -------------------------------------------------------
				}else{

					$resultGrade = $resultGrade - $grade[$j-1];
				}
				
			}


			// $resultMsg= "Your result is:".$resultGrade;
			$pageHTML = get_template_directory() . '/inc/templates/LOE-quiz-result.php';
			

		}
	}else{
		echo "<br><h3 class='text-center'>Quiz is not available yet!</h3>";
	}


	?>



	

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				
				<div class="col-md-8 page">

				
					
					<h4 class="<?php echo $_POST['level']; ?>-quiz-title display-3" >
						<a href="<?php echo $_POST['level'] ?>">
							<?php echo $_POST['level']; ?>
						</a> / 
						<a href="<?php echo $_POST['level']."/".preg_replace("/&/","", $_POST['unit'] ) ?>" >
							<?php echo $_POST['unit']; ?>
						</a> / 
						<a href="<?php echo $_POST['level']."/".preg_replace("/&/","", $_POST['unit'])."/".preg_replace("/&/","", $_POST['topic'])?> " >
							<?php echo $_POST['topic']; ?>
						</a> / Quiz
					</h4>
					<!-- =========================
					Add the template you need below
					================================== -->
					<?php require_once $pageHTML; ?>
			

				</div>



			<?php if(isset($_POST['submit-quiz'])){ 
				
				if($resultGrade < (0.5* $totalGrade)){
					$gradeStyle = "text-danger";
					$msg = "Hmm! Too bad. Study more";
				}elseif($resultGrade < (0.75* $totalGrade)){
					$gradeStyle = "text-warning";
					$msg = "Hmm! you could do better next time";
				}elseif($resultGrade < (0.9* $totalGrade)){
					$gradeStyle = "text-success";
					$msg = "Good! . I look forward for more";
				}elseif($resultGrade <= $totalGrade){
					$gradeStyle = "text-primary";
					$msg = "Very well done!";
				}
			
			?>
				

				<!-- Quiz Instructions -->
				<div class="col-md-4 sidebar">
					<div class="quiz-tips">
						<h4>Quiz Instructions:</h4>
						<p>Thank you for taking the quiz. Print the page for your own record.</p>
						<p> Your grade: </p>
						<p class="display-1"><span class="<?php echo $gradeStyle; ?>"> <?php echo $resultGrade ?></span> /<span class="text-primary"> <?php echo $totalGrade;  ?> </span></p>
						<p class=" display-3 <?php echo $gradeStyle; ?>"><?php echo $msg; ?></p>
					</div>
				</div>

			<?php }else{ ?>
				<!-- Quiz Instructions -->
				<div class="col-md-4 sidebar">
					<div class="quiz-tips">
						<h4>Quiz Instructions:</h4>
						<p>You have <?php echo count($results) ?> question(s) to complete.
						Questions left without an answer would grant you <span class="text-danger">Zero</span> grade.</p>
						<p><strong>Quiz Grade :<span class="text-primary display-1"> <?php echo $totalGrade ?> </span></strong> </p>
						<p class="display-3 text-success">Good Luck! <span class="display-3 dashicons dashicons-smiley"></span></p>
					</div>
				</div>

			<?php }?>		
			</div>
		</div>
	</div>




<?php }else{ ?>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12 page">

				<p class="text-center display-1">Thank you for your interest in taking a quiz. In order to take a quiz you need to visit a material page then click <strong>(Take Quiz)</strong> button on that page.</p>

				
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<?php get_footer();?>