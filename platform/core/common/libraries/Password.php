<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2014
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

class Password {

    protected $key;

    public function __construct() {

        $this->key = config_item('encryption_key_for_passwords');

        log_message('debug', 'Password class initialized');
    }

    public function hash($password) {

        $password = (string) $password;

        if ($password == '') {
            return '';
        }

        $hasher = new PasswordHash(8, false);

        return $hasher->HashPassword($password);
    }

    public function verify($password, $hash) {

        $password = (string) $password;
        $hash = (string) $hash;

        // Don't allow empty passwords, on creation use validation for not accepting them.
        if ($hash == '' || $password == '') {
            return false;
        }

        $hasher = new PasswordHash(8, false);

        return $hasher->CheckPassword($password, $hash) ? true : false;
    }

    public function encrypt($password) {

        $password = (string) $password;

        if ($password == '') {
            return '';
        }

        $old_key_size = GibberishAES::size();
        GibberishAES::size(256);

        $result = GibberishAES::enc($password, $this->key);

        GibberishAES::size($old_key_size);

        return $result;
    }

    public function decrypt($password) {

        $password = (string) $password;

        if ($password == '') {
            return '';
        }

        $old_key_size = GibberishAES::size();
        GibberishAES::size(256);

        $result = GibberishAES::dec($password, $this->key);

        GibberishAES::size($old_key_size);

        return $result;
    }

}