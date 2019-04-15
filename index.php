<?php

//require 'vendor/autoload.php';
// Explicitly including the dispatch framework,
// and our functions.php file
require 'app/includes/dispatch.php';
require 'app/includes/functions.php';

// Load the configuration file
config('source', 'app/config.ini');

// The front page of the blog.
// This will match the root url
get('/index', function () {
	render('home');
});


// If we get here, it means that
// nothing has been matched above

get('.*',function(){
	error(404, render('404', null, false));
});

// Serve the blog
dispatch();
