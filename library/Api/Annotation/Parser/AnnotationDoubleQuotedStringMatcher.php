<?php
namespace Api\Annotation\Parser;

class AnnotationDoubleQuotedStringMatcher extends RegexMatcher {
    public function __construct() {
        parent::__construct('"([^"]*)"');
    }

    protected function process($matches) {
        return $matches[1];
    }
}