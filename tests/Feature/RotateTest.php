<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Rotate;

class RotateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRotate()
    {
        $rotAnswer = new Rotate("Test", 0, 'eng');
        self::assertEquals($rotAnswer->decode(), "Test");

        $rotAnswer = new Rotate("Test", 1, 'eng');
        self::assertEquals($rotAnswer->decode(), "Uftu");

        $rotAnswer = new Rotate("Test", 2, 'eng');
        self::assertEquals($rotAnswer->decode(), "Vguv");

        $rotAnswer = new Rotate("Test", 1, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "Sdrs");

        $rotAnswer = new Rotate("A a", 1, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "Z z");

        $rotAnswer = new Rotate("A a", 1, 'eng');
        self::assertEquals($rotAnswer->decode(), "B b");

        $rotAnswer = new Rotate("A a", 0, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "A a");

        $rotAnswer = new Rotate("A a", 0, 'eng');
        self::assertEquals($rotAnswer->decode(), "A a");

        $rotAnswer = new Rotate("Z z", 0, 'eng');
        self::assertEquals($rotAnswer->decode(), "Z z");

        $rotAnswer = new Rotate("Z z", 1, 'eng');
        self::assertEquals($rotAnswer->decode(), "A a");

        $rotAnswer = new Rotate("Z z", 10, 'eng');
        self::assertEquals($rotAnswer->decode(), "J j");

        $rotAnswer = new Rotate("Z z", 0, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "Z z");

        $rotAnswer = new Rotate("Z z", 1, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "Y y");

        $rotAnswer = new Rotate("Z z", 10, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "P p");
        //////////////////////////////////

        $rotAnswer = new Rotate("Test", 99, 'eng');
        self::assertEquals($rotAnswer->decode(), "Ozno");

        $rotAnswer = new Rotate("Test", 99, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "Yjxy");

        $rotAnswer = new Rotate("Test", 100, 'eng');
        self::assertEquals($rotAnswer->decode(), "Paop");

        $rotAnswer = new Rotate("Test", 100, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "Xiwx");
        //////////////////////////////////////

        $rotAnswer = new Rotate("", 10, 'eng');
        self::assertEquals($rotAnswer->decode(), "");

        $rotAnswer = new Rotate(" ", 10, 'eng');
        self::assertEquals($rotAnswer->decode(), " ");

        $rotAnswer = new Rotate("Тест", 10, 'eng');
        self::assertEquals($rotAnswer->decode(), "Тест");

        $rotAnswer = new Rotate("", 10, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "");

        $rotAnswer = new Rotate(" ", 10, 'eng', True);
        self::assertEquals($rotAnswer->decode(), " ");

        $rotAnswer = new Rotate("Тест", 10, 'eng', True);
        self::assertEquals($rotAnswer->decode(), "Тест");

        // rus
        $rotAnswer = new Rotate("Тест", 0, 'rus');
        self::assertEquals($rotAnswer->decode(), "Тест");

        $rotAnswer = new Rotate("Тест", 1, 'rus');
        self::assertEquals($rotAnswer->decode(), "Уёту");

        $rotAnswer = new Rotate("Тест", 2, 'rus');
        self::assertEquals($rotAnswer->decode(), "Фжуф");

        $rotAnswer = new Rotate("Тест", 1, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Сдрс");

        $rotAnswer = new Rotate("Тест", 2, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Ргпр");

        $rotAnswer = new Rotate("А а", 0, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "А а");

        $rotAnswer = new Rotate("А а", 0, 'rus');
        self::assertEquals($rotAnswer->decode(), "А а");

        $rotAnswer = new Rotate("Я я", 0, 'rus');
        self::assertEquals($rotAnswer->decode(), "Я я");

        $rotAnswer = new Rotate("Я я", 1, 'rus');
        self::assertEquals($rotAnswer->decode(), "А а");

        $rotAnswer = new Rotate("Я я", 10, 'rus');
        self::assertEquals($rotAnswer->decode(), "И и");

        $rotAnswer = new Rotate("Я я", 0, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Я я");

        $rotAnswer = new Rotate("Я я", 1, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Ю ю");

        $rotAnswer = new Rotate("Я я", 10, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Х х");
        /////////////////////////////////

        $rotAnswer = new Rotate("Тест", 99, 'rus');
        self::assertEquals($rotAnswer->decode(), "Тест");

        $rotAnswer = new Rotate("Тест", 99, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Тест");

        $rotAnswer = new Rotate("Тест", 100, 'rus');
        self::assertEquals($rotAnswer->decode(), "Уёту");

        $rotAnswer = new Rotate("Тест", 100, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Сдрс");
        //////////////////////////////////////////

        $rotAnswer = new Rotate("", 10, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "");

        $rotAnswer = new Rotate(" ", 10, 'rus', True);
        self::assertEquals($rotAnswer->decode(), " ");

        $rotAnswer = new Rotate("Test", 10, 'rus', True);
        self::assertEquals($rotAnswer->decode(), "Test");

        $rotAnswer = new Rotate("", 10, 'rus');
        self::assertEquals($rotAnswer->decode(), "");

        $rotAnswer = new Rotate(" ", 10, 'rus');
        self::assertEquals($rotAnswer->decode(), " ");

        $rotAnswer = new Rotate("Test", 10, 'rus');
        self::assertEquals($rotAnswer->decode(), "Test");
    }
}
