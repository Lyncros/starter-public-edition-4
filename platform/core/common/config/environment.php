<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 *---------------------------------------------------------------
 * PHP ini settings
 *---------------------------------------------------------------
 */

@date_default_timezone_set('Europe/Sofia');

ini_set('session.gc_maxlifetime', 4 * 60 * 60); // 4 hours
//ini_set('session.gc_probability', 1);
//ini_set('session.gc_divisor', 1);

// Use cookies to store the session ID on the client side.
@ ini_set ('session.use_only_cookies', 1);
// Disable transparent Session ID support.
@ ini_set ('session.use_trans_sid', 0);


ini_set('memory_limit', '512M');
ini_set('post_max_size', '16M');

ini_set('upload_max_filesize', '16M');
ini_set('max_file_uploads', 20);

ini_set('max_execution_time', 300);
ini_set('max_input_time', 60);

ini_set('auto_detect_line_endings', true);

if (IS_CLI_REQUEST) {

    ini_set('html_errors', 0);
    ini_set('error_prepend_string', '');
    ini_set('error_append_string', '');

    ignore_user_abort(true);
}