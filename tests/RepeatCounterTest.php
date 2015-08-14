<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_returnOutput()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($input);

            //Assert
            $this->assertEquals("a", $result);
        }
    }
 ?>
