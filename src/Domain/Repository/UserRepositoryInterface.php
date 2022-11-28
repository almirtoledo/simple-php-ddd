<?php

declare(strict_types=1);

namespace Domain\Repository;

use Domain\ValueObject\Email;
use Domain\ValueObject\Phone;

interface UserRepositoryInterface
{
  public function save(
    string  $name,
    Email   $email,
    Phone   $phone
  ): void;

  public function get(): string;
}
