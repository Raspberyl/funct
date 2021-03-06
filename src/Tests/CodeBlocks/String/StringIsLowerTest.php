<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringIsLowerTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Ernestas Kvedaras <kvedaras.ernestas@gmail.com>
*/
class StringIsLowerTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringIsLower()
    {
        $out = [];

        $out[] = ['foo', false, true];
        $out[] = ['foo', true, true];
        $out[] = ['fOO', false, false];
        $out[] = ['fOO', true, false];
        $out[] = ['Foo', false, false];
        $out[] = ['Foo', true, false];
        $out[] = ['FOO', false, false];
        $out[] = ['FOO', true, false];
        $out[] = ['foo1', false, true];
        $out[] = ['foo1', true, true];
        $out[] = ['Foo1', false, false];
        $out[] = ['Foo1', true, false];
        $out[] = ['FOO1', false, false];
        $out[] = ['FOO1', true, false];
        $out[] = ['111', false, true];
        $out[] = ['111', true, true];
        $out[] = ['ąčęėįšųūž', false, true];
        $out[] = ['ąčęėįšųūž', true, true];
        $out[] = ['ĄČĘĖĮŠŲŪŽ', false, true];
        $out[] = ['ĄČĘĖĮŠŲŪŽ', true, false];

        return $out;
    }

    /**
     * @dataProvider dataStringIsLower
     *
     * @param string $input
     * @param bool $mb
     * @param bool $expected
     */
    public function testStringIsLower($input, $mb, $expected)
    {
        $this->assertEquals($expected, Funct\string_is_lower($input, $mb));
    }
}
