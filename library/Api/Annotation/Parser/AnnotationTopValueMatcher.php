<?php
namespace Api\Annotation\Parser;

class AnnotationTopValueMatcher extends AnnotationValueMatcher {
	protected function process($value) {
		return array('value' => $value);
	}
}