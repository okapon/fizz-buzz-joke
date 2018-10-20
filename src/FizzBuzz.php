<?php

namespace Okapon;

class FizzBuzz
{
    /**
     * @param int $number
     * @return string
     */
    public static function fizzBuzz(int $number): string
    {
        $fizzMethod = 'fizz' . ($number % 3);
        $buzzMethod = 'buzz' . ($number % 5);

        $str = self::$fizzMethod() . self::$buzzMethod();
        $str = str_replace('FizzError', 'Fizz', $str);
        $str = str_replace('ErrorBuzz', 'Buzz', $str);
        $result = str_replace('ErrorError', $number, $str);

        return $result;
    }

    /**
     * @return string
     */
    private static function fizz0(): string
    {
        return 'Fizz';
    }

    /**
     * @return string
     */
    private static function buzz0(): string
    {
        return 'Buzz';
    }

    public static function __callStatic($name, $arguments)
    {
        return 'Error';
    }
}
