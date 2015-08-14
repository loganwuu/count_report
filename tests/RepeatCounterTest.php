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
            $this->assertEquals(1, $result);
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
            $this->assertEquals(0, $result);
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
            $this->assertEquals(1, $result);
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
            $this->assertEquals(2, $result);
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
            $this->assertEquals(1, $result);
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
            $this->assertEquals("Sorry, please only enter an alphabetic word.", $result);
        }

    }
?>
