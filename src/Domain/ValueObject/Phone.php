<?php

declare(strict_types=1);

namespace Domain\ValueObject;

use Exception;

final class Phone
{
  public function __construct(
    protected string $number
  ) {
    if (strlen($number) <= 6) {
      throw new Exception("Error in phone number", 1);
    }

    $this->number = $number;
  }

  public function value(): string
  {
    return $this->number;
  }
}
