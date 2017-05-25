<?php
namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Category::class;
    }

    /**
     * Create new category
     *
     * @see \App\Repositories\Category\CategoryRepositoryInterface::createCategory()
     */
    public function createCategory($request = [])
    {
        $data = $request->all();
        $data['category_slug'] = $this->slugify($data['category_name']);
        $this->create($data);
    }

    /**
     * Edit category
     *
     * @see \App\Repositories\Category\CategoryRepositoryInterface::editCategory()
     */
    public function editCategory($request = [])
    {
        $data = $request->all();
        $data['category_slug'] = $this->slugify($data['category_name']);
        $this->update($data['id'], $data);
    }

    /**
     * Count number category
     *
     * @return integer
     */
    public function countCategoty()
    {
        $countCategory = $this->_model->count();

        return $countCategory;
    }

    /**
     * Get category by slug
     *
     * @see \App\Repositories\Category\CategoryRepositoryInterface::getCateBySlug()
     */
    public function getCateBySlug($slug)
    {
        $cate = $this->_model->where('category_slug', $slug)->first();

        return $cate;
    }
}
