<?php
if ( !function_exists('generateLinksForCalendar'))
{
    function generateLinksForCalendar()
    {
        $maxDays = date('t');
        $links = [];
        for ($i = 1; $i <= $maxDays; $i++)
        {
            $day = $i > 9 ? $i : '0' . $i;
            $links[$i] = base_url('index.php/posts/getPostsByDate/' . date('Y-m-' . $day));
        }
        return $links;
    }
}