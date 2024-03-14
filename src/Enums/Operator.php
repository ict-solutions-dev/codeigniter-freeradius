<?php

namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum Operator: string
{
    /**
     * Sets the value of an attribute, only if there is no other item of the same attribute.
     * Not allowed as a check item for RADIUS protocol attributes.
     */
    case Equals = '=';

    /**
     * Always matches as a check item, replaces any attribute of the same name.
     */
    case Assign = ':=';

    /**
     * As a check item, it matches if the named attribute is present in the request
     * AND has the given value.
     */
    case Check = '==';

    /**
     * Always matches as a check item, adds the current attribute with its value to the list of configuration items.
     */
    case Add = '+=';

    /**
     * Matches if the given attribute is in the request, AND does not have the given value.
     */
    case NotEquals = '!=';

    /**
     * Matches if the request contains an attribute with a value greater than the one given.
     */
    case Greater = '>';

    /**
     * Matches if the request contains an attribute with a value greater than, or equal to the one given.
     */
    case GreaterEquals = '>=';

    /**
     * Matches if the request contains an attribute with a value less than the one given.
     */
    case Less = '<';

    /**
     * Matches if the request contains an attribute with a value less than, or equal to the one given.
     */
    case LessEquals = '<=';

    /**
     * Matches if the request contains an attribute which matches the given regular expression.
     * This operator may only be applied to string attributes.
     */
    case Matches = '=~';

    /**
     * Matches if the request contains an attribute which does not match the given regular expression.
     */
    case NotMatches = '!~';

    /**
     * Matches if the request contains the named attribute, no matter what the value is.
     */
    case Exists = '=*';

    /**
     * Matches if the request does not contain the named attribute, no matter what the value is.
     */
    case NotExists = '!*';
}
