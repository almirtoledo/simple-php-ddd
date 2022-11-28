<?php

declare(strict_types=1);

namespace Presentation\Http;

use Domain\UseCase\CreateUser;
use Domain\ValueObject\Email;
use Domain\ValueObject\Phone;
use Infra\Adapter\FileAdapter;
use Infra\Repository\UserRepository;

final class UserController
{
  public function save(
    string  $name,
    Email   $email,
    Phone   $phone
  ): void {
    // user repository
    $userRepo = new UserRepository(new FileAdapter);

    // use case
    $createUser = new CreateUser($userRepo);
    $createUser->action($name, $email, $phone);
  }
}
