<?php

namespace NumberToWords\NumberTransformer;

class SwahiliNumberTransformerTest extends NumberTransformerTest
{
    protected function setUp(): void
    {
        $this->numberTransformer = new SwahiliNumberTransformer();
    }

    public function providerItConvertsNumbersToWords(): array
    {
        return [
            [-3, 'kasoro tatu'],
            [-9539, 'kasoro elfu tisa, mia tano na thelathini na tisa'],
            [0, 'sifuri'],
            [1, 'moja'],
            [3, 'tatu'],
            [8, 'nane'],
            [9, 'tisa'],
            [10, 'kumi'],
            [11, 'kumi na moja'],
            [12, 'kumi na mbili'],
            [16, 'kumi na sita'],
            [19, 'kumi na tisa'],
            [20, 'ishirini'],
            [21, 'ishirini na moja'],
            [25, 'ishirini na tano'],
            [26, 'ishirini na sita'],
            [30, 'thelathini'],
            [31, 'thelathini na moja'],
            [40, 'arobaini'],
            [43, 'arobaini na tatu'],
            [50, 'hamsini'],
            [55, 'hamsini na tano'],
            [58, 'hamsini na nane'],
            [60, 'sitini'],
            [67, 'sitini na saba'],
            [70, 'sabini'],
            [79, 'sabini na tisa'],
            [80, 'themanini'],
            [90, 'tisini'],
            [99, 'tisini na tisa'],
            [100, 'mia'],
            [101, 'mia na moja'],
            [102, 'mia na mbili'],
            [111, 'mia na kumi na moja'],
            [113, 'mia na kumi na tatu'],
            [120, 'mia na ishirini'],
            [121, 'mia na ishirini na moja'],
            [199, 'mia na tisini na tisa'],
            [203, 'mia mbili na tatu'],
            [229, 'mia mbili na ishirini na tisa'],
            [287, 'mia mbili na themanini na saba'],
            [300, 'mia tatu'],
            [356, 'mia tatu na hamsini na sita'],
            [410, 'mia nne na kumi'],
            [434, 'mia nne na thelathini na nne'],
            [500, 'mia tano'],
            [578, 'mia tano na sabini na nane'],
            [660, 'mia sita na sitini'],
            [666, 'mia sita na sitini na sita'],
            [689, 'mia sita na themanini na tisa'],
            [729, 'mia saba na ishirini na tisa'],
            [894, 'mia nane na tisini na nne'],
            [900, 'mia tisa'],
            [909, 'mia tisa na tisa'],
            [919, 'mia tisa na kumi na tisa'],
            [990, 'mia tisa na tisini'],
            [999, 'mia tisa na tisini na tisa'],
            [1000, 'elfu moja'],
            [1001, 'elfu moja, moja'],
            [1010, 'elfu moja, kumi'],
            [1015, 'elfu moja, kumi na tano'],
            [1097, 'elfu moja, tisini na saba'],
            [1100, 'elfu moja, mia'],
            [1104, 'elfu moja, mia na nne'],
            [1111, 'elfu moja, mia na kumi na moja'],
            [1243, 'elfu moja, mia mbili na arobaini na tatu'],
            [2000, 'elfu mbili'],
            [2385, 'elfu mbili, mia tatu na themanini na tano'],
            [3766, 'elfu tatu, mia saba na sitini na sita'],
            [4000, 'elfu nne'],
            [4196, 'elfu nne, mia na tisini na sita'],
            [4538, 'elfu nne, mia tano na thelathini na nane'],
            [5000, 'elfu tano'],
            [5020, 'elfu tano, ishirini'],
            [5846, 'elfu tano, mia nane na arobaini na sita'],
            [6459, 'elfu sita, mia nne na hamsini na tisa'],
            [7232, 'elfu saba, mia mbili na thelathini na mbili'],
            [8569, 'elfu nane, mia tano na sitini na tisa'],
            [9539, 'elfu tisa, mia tano na thelathini na tisa'],
            [11000, 'elfu kumi na moja'],
            [11001, 'elfu kumi na moja, moja'],
            [21000, 'elfu ishirini na moja'],
            [21512, 'elfu ishirini na moja, mia tano na kumi na mbili'],
            [90000, 'elfu tisini'],
            [92100, 'elfu tisini na mbili, mia'],
            [212112, 'laki mbili, elfu kumi na mbili, mia na kumi na mbili'],
            [720018, 'laki saba, elfu ishirini, kumi na nane'],
            [999000, 'laki tisa, elfu tisini na tisa'],
            [999999, 'laki tisa, elfu tisini na tisa, mia tisa na tisini na tisa'],
            [1000000, 'milioni moja'],
            [1001001, 'milioni moja, elfu moja, moja'],
            [2000000, 'milioni mbili'],
            [3248518, 'milioni tatu, laki mbili, elfu arobaini na nane, mia tano na kumi na nane'],
            [4000000, 'milioni nne'],
            [5000000, 'milioni tano'],
            [999000000, 'milioni mia tisa na tisini na tisa'],
            [999000999, 'milioni mia tisa na tisini na tisa, mia tisa na tisini na tisa'],
            [999999000, 'milioni mia tisa na tisini na tisa, laki tisa, elfu tisini na tisa'],
            [999999999, 'milioni mia tisa na tisini na tisa, laki tisa, elfu tisini na tisa, mia tisa na tisini na tisa'],
            [1174315110, 'bilioni moja, milioni mia na sabini na nne, laki tatu, elfu kumi na tano, mia na kumi'],
            [1174315119, 'bilioni moja, milioni mia na sabini na nne, laki tatu, elfu kumi na tano, mia na kumi na tisa'],
            [1800000006, 'bilioni moja, milioni mia nane, sita'],
            [15174315119, 'bilioni kumi na tano, milioni mia na sabini na nne, laki tatu, elfu kumi na tano, mia na kumi na tisa'],
            [35174315119, 'bilioni thelathini na tano, milioni mia na sabini na nne, laki tatu, elfu kumi na tano, mia na kumi na tisa'],
            [935174315119, 'bilioni mia tisa na thelathini na tano, milioni mia na sabini na nne, laki tatu, elfu kumi na tano, mia na kumi na tisa'],
            [2935174315119, 'trilioni mbili, bilioni mia tisa na thelathini na tano, milioni mia na sabini na nne, laki tatu, elfu kumi na tano, mia na kumi na tisa']
        ];
    }
}