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
            $result = $test_RepeatCounter->countRepeats($input_one, $input_twp);

            //Assert
            $this->assertEquals("1", $result);
        }
        function test_countRepeats_returnOne()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "a";
            $input_two = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals("1", $result);
        }
        function test_countRepeats_caseTest()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "a";
            $input_two = "A";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals("1", $result);
        }
        function test_countRepeats_multipleWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "a";
            $input_two = "A car drives down the road.";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals("1", $result);
        }
        function test_countRepeats_multipleMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "a";
            $input_two = "A car drives down a road called a street.";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals("3", $result);
        }
    }
 ?>
