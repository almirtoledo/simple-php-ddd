<?php

declare(strict_types=1);

namespace Domain\ValueObject;

use Exception;

final class Email
{
  public function __construct(
    protected string $email
  ) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception("Email is not valid!", 1);
    }

    $this->email = $email;
  }

  public function value(): string
  {
    return $this->email;
  }
}
