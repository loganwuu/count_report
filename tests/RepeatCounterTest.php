<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_oneWordString()
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
    }
?>
