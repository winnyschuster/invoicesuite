<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum;

enum FormatoTrasmissione: string
{
    case FPA12 = 'FPA12';
    case FPR12 = 'FPR12';
}
