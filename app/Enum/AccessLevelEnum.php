<?php

namespace App\Enum;

enum AccessLevelEnum: int
{
    case Read = 1;
    case Write = 2;
    case Admin = 3;

    public static function fromString(string $level): self
    {
        return match (strtolower($level)) {
            'read' => self::Read,
            'write' => self::Write,
            'admin' => self::Admin,
            default => throw new \InvalidArgumentException("Invalid access level: $level"),
        };
    }

    public static function hasMinLevel(int $currentLevel, self $requiredLevel): bool
    {
        return $currentLevel >= $requiredLevel->value;
    }
}