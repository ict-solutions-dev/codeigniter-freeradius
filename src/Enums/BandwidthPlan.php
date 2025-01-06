<?php

namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum BandwidthPlan: string
{
    case Network_1 = 'Network 1';
    case Network_2 = 'Network 2';
    case Network_3 = 'Network 3';
    case Network_4 = 'Network 4';

    public static function getDropdownValues(): array
    {
        $dropdownValues = [];

        foreach (self::cases() as $case) {
            $dropdownValues[$case->value] = $case->value;
        }

        return $dropdownValues;
    }
}
