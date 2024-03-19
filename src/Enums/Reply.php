<?php

namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum Reply: string
{
    public static function getDropdownValues(): array
    {
        $dropdownValues = [];

        foreach (self::cases() as $case) {
            $dropdownValues[$case->value] = self::getReplyByName($case->name);
        }

        return $dropdownValues;
    }

    private static function getReplyByName(string $name): string
    {
        $replies = [
            'accessAccept' => 'Access-Accept',
            'accessReject' => 'Access-Reject',
        ];

        return $replies[$name] ?? '';
    }

    public static function getReplyByValue(string $value): string
    {
        $replies = [
            '1' => 'Access-Accept',
            '2' => 'Access-Reject',
        ];

        return $replies[$value] ?? '';
    }

    case accessAccept = '1';

    case accessReject = '2';
}
