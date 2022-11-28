<?php

declare(strict_types=1);

namespace Domain\UseCase;

use Domain\Repository\UserRepositoryInterface;
use Domain\ValueObject\Email;
use Domain\ValueObject\Phone;

final class CreateUser
{
  public function __construct(
    protected UserRepositoryInterface $userRepo
  ) {
  }

  public function action(
    string  $name,
    Email   $email,
    Phone   $phone
  ): void {
    $this->userRepo->save(
      $name,
      $email,
      $phone
    );
  }
}
