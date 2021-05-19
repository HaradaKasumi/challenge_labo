<?php

declare(strict_types=1); 

class ClassB
{
    public function methodB(): void
    {
        throw new Exception('methodBでエラー発生');
        echo 'methodB completed.'; // この行は実行されない
    }
}
