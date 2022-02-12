<?php

namespace Traits;

trait Amphibious {
    /**
     * This is for animals who are both on land and water.
     * This is a trait which can be applied to multiple classes in different categories.
     * @return string
     */
    public function amphib(): string {
        return $this->name . " can be found on land, and in water.";
    }
}
