<?php
namespace Api\Annotation\Parser;

class AnnotationValueInArrayMatcher extends AnnotationValueMatcher {
    public function process($value) {
        return array($value);
    }
}