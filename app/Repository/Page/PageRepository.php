<?php
declare(strict_types = 1);

namespace App\Repository\Page;

use App\Entity\Page;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface PageRepository
{
    public function create(Page $page): void;

    public function update(Page $page): void;

    public function find(int $id): ?Page;

    public function findByUrl(string $url): ?Page;

    public function findPaginated(int $page, int $perPage): LengthAwarePaginator;

    public function findPaginatedWithOrder(string $orderBy, bool $descending, int $page, int $perPage): LengthAwarePaginator;

    public function findPaginateWithSearch(string $search, int $page, int $perPage): LengthAwarePaginator;

    public function findPaginatedWithOrderAndSearch(string $orderBy, bool $descending, string $search, int $page, int $perPage): LengthAwarePaginator;

    public function remove(Page $page): void;

    public function deleteAll(): bool;
}
