<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
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
    }
?>
