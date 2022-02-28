<?php

add_filter("gform_field_content", "bootstrap_styles_for_gravityforms_fields", 10, 5);

function bootstrap_styles_for_gravityforms_fields($content, $field, $value, $lead_id, $form_id){

	
	if($field["type"] == 'textarea') {
		$content = str_replace('class=\'textarea', 'class=\'form-control textarea', $content);
	}


    if($field["type"] == 'text' || $field["type"] == 'email') {
		$content = str_replace('<input ', '<input class=\'form-control\' ', $content);
	}
	
	return $content;
	
}

add_filter("gform_submit_button", "form_submit_button", 10, 2);

function form_submit_button($button, $form){
    return "<button class='button btn btn-primary' id='gform_submit_button_{$form["id"]}'><span>Submit</span></button>";
}