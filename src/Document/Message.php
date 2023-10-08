<?php
declare(strict_types=1);

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

#[Document(collection: 'messages')]
class Message
{
    #[MongoDB\Id]
    protected int $id;

    #[MongoDB\Field(type: 'int')]
    #[Assert\NotBlank()]
    protected int $senderId;

    #[MongoDB\Field(type: 'int')]
    #[Assert\NotBlank()]
    protected int $receiverId;

    #[MongoDB\Field(type: 'string')]
    #[Assert\NotBlank()]
    protected string $messageText;

    #[MongoDB\Field(type: 'string')]
    protected ?string $image = null;
}
