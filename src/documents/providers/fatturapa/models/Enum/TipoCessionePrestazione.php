<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\fatturapa\models\Enum;

enum TipoCessionePrestazione: string
{
    case SC = 'SC';
    case PR = 'PR';
    case AB = 'AB';
    case AC = 'AC';
}
