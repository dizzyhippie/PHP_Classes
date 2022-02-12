<?php

namespace Traits;

trait Run {
    /**
     * This is for animals who have the ability to move fast
     * This is a trait which can be applied to multiple classes in different categories.
     * @return string
     */
    public function run(): string {
        return $this->name . " have the ability to run/ move quickly.";
    }
}
