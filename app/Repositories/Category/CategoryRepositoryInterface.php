<?php
namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    /**
     * Create new category
     *
     * @param array $request
     */
    public function createCategory($request = []);

    /**
     * Edit category
     *
     * @param array $request
     */
    public function editCategory($request = []);

    /**
     * Count number of category
     */
    public function countCategoty();

    /**
     * Get category by slug
     *
     * @param string $slug
     */
    public function getCateBySlug($slug);
}
