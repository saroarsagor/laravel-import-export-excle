<?php

namespace App\Helpers\Core;


class Func
{
    /**
     * @throws UserFriendlyException
     */
    public static function Error(string $error, int $responseCode = 200)
    {
        if (HelperController::isAPI()) {
            throw new UserFriendlyException($error);
        }
        return redirect(url()->previous())->withErrors($error);
    }
}
