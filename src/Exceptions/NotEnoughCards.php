<?php

declare(strict_types=1);

namespace Tgt\Deck\Exceptions;

use UnderflowException;

final class NotEnoughCards extends UnderflowException implements Exception
{

}
