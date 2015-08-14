<?php

    class RepeatCounter
    {
        function countRepeats($input_one, $input_two)
        {
            $keyword = strtolower($input_one);
            $string_to_search = strtolower($input_two);
            $expl_string_to_search = explode(" ", $string_to_search);

            foreach($expl_string_to_search as $word)
            {
                $output += substr_count($keyword, $word);
            }

            return $output;
        }
    }
 ?>
