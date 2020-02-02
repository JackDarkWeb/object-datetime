<?php


class Datetimes
{
    /**
     * @param $count
     * @param $text
     * @return string
     */
    static function pluralize(int $count, string $text){
        return $count.(($count == 1) ? " $text" : " ${text}s");
    }

    /**
     * @param string $datetime
     * @return string
     * @throws Exception
     */
    static function ago(string $datetime){

        $datetime = new DateTime($datetime);
        $diff = date_create("now")->diff($datetime);

        $str = '';
        if($diff->y >= 1)
            return $str = self::pluralize($diff->y, 'year');
        if($diff->m >= 1)
            return $str = self::pluralize($diff->m, 'month');
        if($diff->d >= 1)
            return $str = self::pluralize($diff->d, 'day');
        if($diff->h >= 1)
            return $str = self::pluralize($diff->h, 'hour');
        if($diff->i >= 1)
            return $str = self::pluralize($diff->i, 'minute');


        return $str = self::pluralize($diff->s, 'second');

    }
}

echo Datetimes::ago('2020/02/02 08:42:30');

