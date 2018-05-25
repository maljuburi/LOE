<?php


// Register setting/section/field for the Quiz
function LOE_quiz_settings(){

	



	// Create Add Quiz Section
	// --------------------
	add_settings_section(
		// section id
		'add-quiz-options',
		// section title
		'Add Quiz',
		// section callback function
		'add_quiz_section',
		// page this section belongs to
		'LOE_theme_options'
	);
	
	// topic
	register_setting(
		// setting group | just like a table in the database
		'LOE-quiz-settings-group',
		// setting name to register in the above group
		'quiz_topic'
	);

	// Question
	register_setting(
		// setting group | just like a table in the database
		'LOE-quiz-settings-group',
		// setting name to register in the above group
		'quiz_question'
	);

	// Choices
	register_setting(
		// setting group | just like a table in the database
		'LOE-quiz-settings-group',
		// setting name to register in the above group
		'question_choices'
	);

	// Answer
	register_setting(
		// setting group | just like a table in the database
		'LOE-quiz-settings-group',
		// setting name to register in the above group
		'Answer'
	);
	

	// topic
	add_settings_field(
		// field id
		'page-topic',
		// field title
		'Select a Topic :',
		// field callback
		'select_topic',
		// page this field belongs to
		'LOE_theme_options',
		// section this field belongs to
		'add-quiz-options'
	);

	// Question
	add_settings_field(
		// field id
		'quiz-question',
		// field title
		'Question :',
		// field callback
		'question_field',
		// page this field belongs to
		'LOE_theme_options',
		// section this field belongs to
		'add-quiz-options'
	);

	// Choices
	add_settings_field(
		// field id
		'question-choices',
		// field title
		'Choices :',
		// field callback
		'choices_field',
		// page this field belongs to
		'LOE_theme_options',
		// section this field belongs to
		'add-quiz-options'
	);

	// Answer
	add_settings_field(
		// field id
		'answer',
		// field title
		'Correct Answer :',
		// field callback
		'answer_field',
		// page this field belongs to
		'LOE_theme_options',
		// section this field belongs to
		'add-quiz-options'
	);
}

