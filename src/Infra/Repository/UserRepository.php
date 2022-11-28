<?php

declare(strict_types=1);

namespace Infra\Repository;

use Domain\Entity\UserEntity;
use Domain\Repository\UserRepositoryInterface;
use Domain\ValueObject\Email;
use Domain\ValueObject\Phone;
use Infra\Contract\FileContractInterface;

final class UserRepository implements UserRepositoryInterface
{
  public function __construct(
    protected FileContractInterface $file
  ) {
  }

  public function save(string $name, Email $email, Phone $phone): void
  {
    $user = new UserEntity($name, $email, $phone);

    $this->file->save('user_message', $user->msg());
  }

  public function get(): string
  {
    return '';
  }
}
