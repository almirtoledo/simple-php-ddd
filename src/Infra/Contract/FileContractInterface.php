<?php

declare(strict_types=1);

namespace Infra\Contract;

interface FileContractInterface
{
  public function save(string $filename, string $message): void;
}
