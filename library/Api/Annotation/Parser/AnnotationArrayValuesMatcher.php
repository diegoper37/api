<?php
namespace Api\Annotation\Parser;

class AnnotationArrayValuesMatcher extends ParallelMatcher {
    protected function build() {
        $this->add(new AnnotationArrayValueMatcher);
        $this->add(new AnnotationMoreValuesMatcher);
    }
}