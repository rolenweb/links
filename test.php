<?php

var_dump(hashPassword('gfhjkm'));

function hashPassword($password, $salt = null) {

		// @todo upgrade to use password_hash
		if(is_null($salt)) {
			$salt = substr(md5(uniqid(rand(), true)), 0, 9);
		}

		$hash = $salt.sha1($salt.$password);
		return $hash;
	}
?>