<?php

declare(strict_types=1);

namespace Domain\Entity;

use Domain\ValueObject\Email;
use Domain\ValueObject\Phone;

/**
 * @author Almir Toledo
 * @since 2022/11/28
 * 
 * Create a new User
 * 
 * @param string $name
 * @param Email $email
 * @param Phone $phone
 */
final class UserEntity
{
  public function __construct(
    protected string  $name,
    protected Email   $email,
    protected Phone   $phone
  ) {
  }

  /**
   * Return this user message
   * @return string the user message
   */
  public function msg(): string
  {
    return "My name is {$this->name}, 
            my email address is {$this->email->value()} 
            and my cell phone number is {$this->phone->value()}!.";
  }
}
