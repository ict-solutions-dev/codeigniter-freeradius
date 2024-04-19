<?php

namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum RadpostauthReply: string
{
    /**
     * Returns a string representation of the reply.
     */
    public function toString(): string
    {
        return match ($this) {
            self::accessAccept => lang('FreeRadius.radpostauthReplies.accessAccept'),
            self::accessReject => lang('FreeRadius.radpostauthReplies.accessReject'),
        };
    }

    /**
     * Returns an array of dropdown values.
     */
    public static function getDropdownValues(): array
    {
        $dropdownValues = [];

        foreach (self::cases() as $case) {
            $dropdownValues[$case->value] = $case->toString();
        }

        return $dropdownValues;
    }

    /**
     * Represents an Access-Accept reply.
     * This is sent by the RADIUS server to accept the user for service.
     */
    case accessAccept = 'Access-Accept';

    /**
     * Represents an Access-Reject reply.
     * This is sent by the RADIUS server to deny the user access to the service.
     */
    case accessReject = 'Access-Reject';
}
