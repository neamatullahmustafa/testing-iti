<?php

class Task1
{
    public function fact($n)
    {
        if (!is_int($n) || $n < 0) {
            return null;
        }

        if ($n == 0 || $n == 1) {
            return 1;
        }

        return $n * $this->fact($n - 1);
    }
}

?>