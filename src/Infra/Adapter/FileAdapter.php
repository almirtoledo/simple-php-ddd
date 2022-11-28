<?php

declare(strict_types=1);

namespace Infra\Adapter;

use Infra\Contract\FileContractInterface;

final class FileAdapter implements FileContractInterface
{
  public function save(string $filename, string $message): void
  {
    file_put_contents(__DIR__ . "/../../../public/files/{$filename}.txt", $message);
  }
}
