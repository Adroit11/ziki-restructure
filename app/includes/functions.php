<?php

require 'classes/Post.php';

use Michelf\Markdown;

/* General Ziki Functions */
function get_posts(){
	//fetch all posts
}

// The not found error
function not_found(){
	error(404, render('404', null, false));
}
