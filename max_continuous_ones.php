<?php
function maxOnesIndices(array $A, int $B): array {
    $left = 0;
    $right = 0;
    $zeroCount = 0;

    $bestLeft = 0;
    $bestWindow = 0;

    while ($right < count($A)) {
        // إذا صادفنا صفر، زوّد العداد
        if ($A[$right] == 0) {
            $zeroCount++;
        }

        // إذا عدّينا الحد المسموح من الأصفار، نزحزح اليسار
        while ($zeroCount > $B) {
            if ($A[$left] == 0) {
                $zeroCount--;
            }
            $left++;
        }

        // تحديث أفضل نافذة شفناها
        if ($right - $left + 1 > $bestWindow) {
            $bestWindow = $right - $left + 1;
            $bestLeft = $left;
        }

        // حرّك اليمين
        $right++;
    }

    // كوّن مصفوفة النتائج
    $result = [];
    for ($i = 0; $i < $bestWindow; $i++) {
        $result[] = $bestLeft + $i;
    }

    return $result;
}

echo "\nOriginal Array: [" . implode(', ', maxOnesIndices([1, 0, 1, 0, 0, 1, 1], 2)) . "]\n";
echo "-------------------------------\n";
echo "\nOriginal Array: [" . implode(', ', maxOnesIndices([1, 1, 0, 1, 0, 1, 1], 1)) . "]\n";

?>