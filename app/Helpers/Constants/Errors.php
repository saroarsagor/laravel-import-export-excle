<?php


namespace App\Helpers\Constants;


class Errors
{
    public const FORBIDDEN                      = 'FORBIDDEN';
    public const AUTHENTICATION_FAILED          = 'AUTHENTICATION_FAILED';
    public const AUTHENTICATION_TOKEN_MISSING   = 'AUTHENTICATION_TOKEN_MISSING';
    public const AUTHENTICATION_TOKEN_MALFORMED = 'AUTHENTICATION_TOKEN_MALFORMED';
    public const UNAUTHORIZED                   = 'UNAUTHORIZED';
    public const AUTHENTICATION_TOKEN_EXPIRED   = 'AUTHENTICATION_TOKEN_EXPIRED';
    public const AUTHENTICATION_TOKEN_INVALID   = 'AUTHENTICATION_TOKEN_INVALID';
    public const ACTION_NOT_SUPPORTED           = 'ACTION_NOT_SUPPORTED';
    public const REQUEST_FAILED                 = 'REQUEST_FAILED';
    public const FATAL_THROWABLE_ERROR          = 'FATAL_THROWABLE_ERROR';
    public const VALIDATION_FAILED              = 'VALIDATION_FAILED';
    public const METHOD_NOT_ALLOWED             = 'METHOD_NOT_ALLOWED';
    public const ENDPOINT_NOT_FOUND             = 'ENDPOINT_NOT_FOUND';
    public const RESOURCE_NOT_FOUND             = 'RESOURCE_NOT_FOUND';
    public const EMI_PAID                       = 'EMI_PAID';
    public const SOMETHING_WENT_WRONG           = 'SOMETHING_WENT_WRONG';
    public const DATA_EXIST                     = 'DATA_EXIST';
    public const AMOUNT_IS_BIGGER_THAN_DUE      = 'AMOUNT_IS_BIGGER_THAN_DUE';
    public const SELECT_PROJECT_FIRST           = 'SELECT_PROJECT_FIRST';
    public const PLEASE_SELECT_PROJECT          = 'PLEASE_SELECT_PROJECT';
    public const ALREADY_SOLD                   = 'ALREADY_SOLD';
    
    public const PLEASE_DOCTOR_LOGIN            = 'PLEASE_DOCTOR_LOGIN';
    public const USER_ROLE_NOT_DOCTOR           = 'USER_ROLE_NOT_DOCTOR';
    public const PASSWORD_MISMATCH              = 'PASSWORD_MISMATCH';
}