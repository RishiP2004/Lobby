<?php

declare(strict_types = 1);

namespace lobby\morph;

use lobby\Lobby;

use core\utils\Manager;

class Morph extends Manager {
	public static $instance = null;

	public function init() {
		self::$instance = $this;

		//$this->registerCommand(\lobby\morph\command\Morph::class, new \lobby\morph\command\Morph($this));
		$this->registerListener(new MorphListener($this), Lobby::getInstance());
	}

	public static function getInstance() : self {
		return self::$instance;
	}
}