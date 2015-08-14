<?php
    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            //Allow only alphabetic letters to be searched
            if (empty($word)) {
                return "Please enter a word to search for.";
            }
            elseif (!ctype_alpha($word)) {
                return "Sorry, please only enter an alphabetic word.";
            }

            //Convert all letters to lowercase
            $lowercase_word = mb_strtolower($word);
            $lowercase_string = mb_strtolower($string);

            //Break the string into an array of words
            $string_array = explode(" ", $lowercase_string);

            //Add counter for the $word
            $counter = 0;

            foreach ($string_array as $lowercase_string_word)
            if ($lowercase_word == $lowercase_string_word) {
                $counter++;
            }
            return $counter;
        }
    }
?>
