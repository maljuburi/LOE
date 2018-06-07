
<?php


$level = $_POST['level'];
$topic = $_POST['topic'];

global $wpdb;
$table_name = $wpdb->prefix . "quiz";
$query = "SELECT * FROM $table_name WHERE topic_level='$level' AND topic='$topic'";
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



<?php get_header();?>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 page">

			
				
				<h4 class="<?php echo $_POST['level'] ?>-quiz-title display-4"> <a href="<?php echo $_POST['level'] ?>"><?php echo $_POST['level'] ?></a> | <a href="<?php echo $_POST['level']."/".preg_replace("/&/","", $_POST['topic'] ) ?>"><?php echo $_POST['topic'] ?></a> | Quiz</h4>
				<!-- =========================
				 Add the template you need below
				 ================================== -->
        		<?php require_once $pageHTML; ?>
        

			</div>



		<?php if(isset($_POST['submit-quiz'])){ ?>
			<!-- Quiz Instructions -->
			<div class="col-md-4 sidebar">
				<div class="quiz-tips">
					<h4>Quiz Instructions:</h4>
					<p>Thank you for taking the quiz. Print the page for your own record.</p>
					<p> Your grade: </p>
					<p class="display-3"><span class="text-success"> <?php echo $resultGrade ?></span> /<span class="text-primary"> <?php echo $totalGrade;  ?> </span></p>
				</div>
			</div>

		<?php }else{ ?>
			<!-- Quiz Instructions -->
			<div class="col-md-4 sidebar">
				<div class="quiz-tips">
					<h4>Quiz Instructions:</h4>
					<p>You have <?php echo count($results) ?> question(s) to complete.
					Questions left without an answer would grant you <span class="text-danger">Zero</span> grade.</p>
					<p><strong>Quiz Grade :<span class="text-primary display-3"> <?php echo $totalGrade ?> </span></strong> </p>
					<p class="display-4 text-success">Good Luck! <span class="dashicons dashicons-smiley"></span></p>
				</div>
			</div>

		<?php }?>		
		</div>
	</div>
</div>


<?php get_footer();?>