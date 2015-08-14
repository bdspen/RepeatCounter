<?php

    class RepeatCounter
    {
        function countRepeats($input_one, $input_two)
        {
            $keyword = strtolower($input_one);
            $string_to_search = explode(" ", strtolower($input_two));
            $output = 0;

            foreach($string_to_search as $word)
                 if($word == $keyword)
                 {
                     $output = $output + 1;
                 }
            return $output;
        }
    }
 ?>
