<?php

declare(strict_types=1);

use PhpParser\Comment;
use PhpParser\Node;

final class FakeNode implements Node
{
    public function getType(): string
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getSubNodeNames(): array
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getLine(): int
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getStartLine(): int
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getEndLine(): int
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getStartTokenPos(): int
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getEndTokenPos(): int
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getStartFilePos(): int
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getEndFilePos(): int
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getComments(): array
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getDocComment(): ?Comment\Doc
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function setDocComment(Comment\Doc $docComment): void
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function setAttribute(string $key, $value): void
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function hasAttribute(string $key): bool
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getAttribute(string $key, $default = null)
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function getAttributes(): array
    {
        throw new RuntimeException(__FUNCTION__);
    }

    public function setAttributes(array $attributes): void
    {
        throw new RuntimeException(__FUNCTION__);
    }
}
