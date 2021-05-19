<?php
declare(strict_types=1);

class StarCalculator
{
    /**
     * 全レビューのスター数を計算し、その平均値を出す。
     */
    public function calculateOverallStarAverage(array $reviews): float
    {
        $starPoints = [];
        foreach ($reviews as $review) {
            $starPoints[] = $this->calculateTotalStars($review);
        }
        return round(array_sum($starPoints) / 3 / count($reviews), 2);
    }

    /**
     * 1つのレビューのスター数の合計値を算出する。
     */
    public function calculateTotalStars(array $review): int
    {
        $totalStars = 0;
        foreach (['useful', 'price', 'quality'] as $starType) {
            $totalStars += $this->getStarPoint($review, $starType);
        }
        return $totalStars;
    }

    /**
     * レビューデータから指定されたスターの数を得る。
     * @param string $starType スター種別を表す文字列。「useful」「price」「quality」のいずれかを指定する。
     */
    private function getStarPoint(array $review, string $starType)
    {
        $starPoint = $review['stars'][$starType];
        if ($starPoint > 0) {
            return $starPoint;

        // スター数がマイナス値は仕様上ありえないが、万が一その場合は0を返す。
        } elseif ($starPoint < 0) {
            return 0;
        }
        return true;
    }
}
