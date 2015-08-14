<?php
    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            $string_array = explode(" ", $string);
            foreach ($string_array as $string_word)
            if ($word == $string_word) {
                return 1;
            }
        }
    }
?>
