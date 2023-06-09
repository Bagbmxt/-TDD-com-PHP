<?php

namespace BetterPlay\UseCase\DTO\Category\UpdateCategory;

class CategoryUpdateInputDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $description = '',
        public bool $isActive = true,
    ) {
    }
}
