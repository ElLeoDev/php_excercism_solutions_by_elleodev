<?php

class HighSchoolSweetheart
{   
    public function trimName(string $name): string
    {
        return trim(preg_replace('/\s+/', ' ', $name));
    }

    public function firstLetter(string $name): string
    {
        // throw new \BadFunctionCallException("Implement the function");
        return $this->trimName($name)[0];
    }

    public function initial(string $name): string
    {
        // throw new \BadFunctionCallException("Implement the function");
        $name = strtoupper($this->firstLetter($name));
        return "$name.";
    }

    public function initials(string $name): string
    {
        // throw new \BadFunctionCallException("Implement the function");
        $name = $this->trimName($name);
        $n_array = explode(" ", $name);
        $n1 = $this->initial($n_array[0]);
        $n2 = $this->initial($n_array[1]);
        return "$n1 $n2";
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        // throw new \BadFunctionCallException("Implement the function");

        $n1 = $this->initials($sweetheart_a);
        $n2 = $this->initials($sweetheart_b);
        $expected = <<<EXPECTED_HEART
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    **     $n1  +  $n2     **
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    EXPECTED_HEART;
        
        return $expected;
    }
}
