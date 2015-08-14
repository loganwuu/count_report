<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        //For Spec #1
        function test_oneWordStringMatch()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "dog";
            $string_input = "dog";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("The word 'dog' appears 1 time in 'dog'.", $result);
        }

        //For Spec #2
        function test_oneWordStringNoMatch()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "dog";
            $string_input = "cat";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("The word 'dog' appears 0 time in 'cat'.", $result);
        }

        //For Spec #3
        function test_MultiwordMatchOnce()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "dogs";
            $string_input = "I love dogs";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("The word 'dogs' appears 1 time in 'I love dogs'.", $result);
        }

        //For Spec #4
        function test_MultiwordMatchTwice()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "dog";
            $string_input = "I love dog 1 and dog 2";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("The word 'dog' appears 2 times in 'I love dog 1 and dog 2'.", $result);
        }

        //For Spec #5
        function test_AllLowercase()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "DOGS";
            $string_input = "I love dogs";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("The word 'DOGS' appears 1 time in 'I love dogs'.", $result);
        }

        //For Spec #6
        function test_nonAlphabetsSearch()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "//";
            $string_input = "I love dogs";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("Sorry, please only enter one word to search for without any space or non-alphabetic characters.", $result);
        }

        //For Spec #7
        function test_emptyWordBox()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "";
            $string_input = "I love dogs";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("Please enter a word to search for.", $result);
        }

        //For Spec #8
        function test_emptyStringBox()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "dog";
            $string_input = "";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("Please enter a paragraph to search from.", $result);
        }

        //For Spec #9
        function test_bothBoxs()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $word_input = "";
            $string_input = "";

            //Act
            $result = $test_countRepeats->countRepeats($word_input, $string_input);

            //Assert
            $this->assertEquals("Please enter a word to search for and a paragraph to search it from.", $result);
        }
    }
?>
