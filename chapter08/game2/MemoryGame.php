<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/PlayingCards.php';
require_once dirname(__FILE__) . '/AnimalCards.php';

// 神経衰弱ゲームクラス
class MemoryGame
{
    // 何らかのカードを表す
    private $playingCards;

    // コンストラクタ
    public function __construct(string $cardType)
    {
        if ($cardType === 'playingCards') {
            $this->playingCards = new PlayingCards();
        } elseif ($cardType === 'animalCards') {
            $this->playingCards = new AnimalCards();
        }
        // カードをシャッフルしてランダムに並び替える
        $this->playingCards->shuffle();
    }

    // 2枚のカードが同じ数字であれば真。
    // 引数$position1～2は、めくられたカードの位置を表す
    public function isHit(int $position1, int $position2): bool
    {
        $position1Value = $this->playingCards->getValue($position1);
        echo "{$position1}枚目のカードは：{$position1Value}", PHP_EOL;

        $position2Value = $this->playingCards->getValue($position2);
        echo "{$position2}枚目のカードは：{$position2Value}", PHP_EOL;

        return $position1Value === $position2Value;
    }
}
