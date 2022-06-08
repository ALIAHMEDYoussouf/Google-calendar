<?php 
 
// Database configuration    
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'goolgle_agenda'); 


// Google API configuration
define('GOOGLE_CLIENT_ID', '136981041715-isa4iobnf5aft8vumqmk08bnb1v0agvp.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');

define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar'); 
define('REDIRECT_URI', 'http://localhost/MonStage/api/google_calendar_event_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
 
?>