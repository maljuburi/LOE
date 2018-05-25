<?php

// ==============
// Quiz Admin Page Callbacks
// ============



// Generate Page Section
function add_quiz_section(){
	echo 'This is a quiz generator page that helps you add quizes to different lectures on your website<hr>';
}

// Generate Topic Fields
function select_topic(){
	require_once( get_template_directory() . '/admin/quiz/templates/_select_topic.php');
}
// Generate Question Fields
function question_field(){
	require_once( get_template_directory() . '/admin/quiz/templates/_quiz_question.php');
}
// Generate Choices Fields
function choices_field(){
	require_once( get_template_directory() . '/admin/quiz/templates/_question_choices.php');
}
// Generate Answer Fields
function answer_field(){
	require_once( get_template_directory() . '/admin/quiz/templates/_answer.php');
}



