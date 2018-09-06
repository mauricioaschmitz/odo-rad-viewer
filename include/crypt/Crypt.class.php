<?php
	class Crypt {
	 
		protected static $saltPrefix = '2a';
		protected static $defaultCost = 8;
		protected static $saltLength = 22;

		public static function hash($string, $cost = null) {
			if (empty($cost)) {
				$cost = self::$defaultCost;
			}
	 
			$salt = self::__generateRandomSalt();
	 
			$hashString = self::__generateHashString((int)$cost, $salt);
	 
			return crypt($string, $hashString);
		}
		public static function check($string, $hash) {
			return (crypt($string, $hash) === $hash);
		}
		private static function __generateRandomSalt() {
			$seed = uniqid(mt_rand(), true);
	 
			$salt = base64_encode($seed);
			$salt = str_replace('+', '.', $salt);
	 
			return substr($salt, 0, self::$saltLength);
		}
		private static function __generateHashString($cost, $salt) {
			return sprintf('$%s$%02d$%s$', self::$saltPrefix, $cost, $salt);
		}
	}
?>