<?php

namespace Mavi\Macros;

class Timestamp {

	/**
	 * Adds modified time of file into path as query.
	 * @param string $filename Path and filename.
	 * @return string
	 * @throws \Exception
	 */
	public static function set(string $filename): string {

		if (file_exists($filename) === false) {
			throw new \Exception('Timestamp: File not found. 404.');
		}

		$time = filemtime($filename);

		return $filename . '?v=' . $time;
	}
}
