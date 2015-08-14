<?php

    class RepeatCounter
    {
        function countRepeats($input_one, $input_two)
        {
            $keyword = strtolower($input_one);
            $string_to_search = strtolower($input_two);

            if ($keyword == $string_to_search)
            {
                $output = "1";
            }
            return $output;
        }
    }
 ?>
