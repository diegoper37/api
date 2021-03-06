<?php
namespace Api\Annotation\Parser;

class CompositeMatcher {
	protected $matchers = array();
	private $wasConstructed = false;

	public function add($matcher) {
		$this->matchers[] = $matcher;
	}

	public function matches($string, &$value) {
		if(!$this->wasConstructed) {
			$this->build();
			$this->wasConstructed = true;
		}
		return $this->match($string, $value);
	}

	protected function build() {}
}