<?php

/**
 * Return the list of days in a month
 *
 * @return array
 */
if (!function_exists('list_of_days')) {
    function list_of_days() {
        $month = date('m');
        $year  = date('Y');
        $lists = [];

        for ($i = 0; $i <= 31 ; $i++) {
            $time = mktime(12, 0, 0, $month, $i, $year);
            if (date('m', $time) == $month) {
                $lists[] = [
                    date('d D', $time),
                    date('D', $time),
                    $time,
                ];
            }
        }

        return [
            'month' => $month,
            'year'  => $year,
            'lists' => $lists
        ];
    }
}
