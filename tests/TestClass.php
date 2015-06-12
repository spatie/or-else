<?php

namespace Spatie\OrElse\Test;

use Spatie\OrElse\OrElse;

class TestClass {

    use OrElse;

    /**
     * This function will return all given arguments.
     *
     * @return mixed
     */
    public function willReturn()
    {
        $args = func_get_args();

        if (count($args) == 1) {
            return $args[0];
        }

        return implode($args);
    }
}