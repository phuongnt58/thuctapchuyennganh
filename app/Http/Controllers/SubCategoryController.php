<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SubCategory\SubCategoryRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Http\Requests\SubCategoryRequest;

class SubCategoryController extends Controller
{
    protected $subCateRepository;

    protected $CateRepository;

    /**
     * Create a new controller instance
     *
     * @param SubCategoryRepositoryInterface $subCateRepository
     * @param CategoryRepositoryInterface $CateRepository
     */
    public function __construct(SubCategoryRepositoryInterface $subCateRepository, CategoryRepositoryInterface $CateRepository)
    {
        $this->subCateRepository = $subCateRepository;
        $this->CateRepository = $CateRepository;
    }

    /**
     * Get all subcategories and return the view of list subcategories
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $cate = $this->subCateRepository->getAll();
        $category = $this->CateRepository->getAll();

        return view('admin.subCategory.list', [
            'data' => $cate,
            'category' => $category
        ]);
    }

    public function show(Request $request)
    {}

    /**
     * Return the view action create new subcategory
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        $category = $this->CateRepository->getAll();

        return view('admin.subCategory.add', [
            'category' => $category
        ]);
    }

    /**
     * Create new subcategory and return success message
     *
     * @param SubCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SubCategoryRequest $request)
    {
        $this->subCateRepository->createSubCategory($request);

        return redirect()->route('subcategory.index')->with('message', 'Thêm mới thành công !');
    }

    /**
     * Return the view of action update subcategory
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Request $request)
    {
        $category = $this->CateRepository->getAll();
        $subcategory = $this->subCateRepository->find($request->id);

        return view('admin.subCategory.edit', [
            'category' => $category,
            'sub' => $subcategory
        ]);
    }

    /**
     * Uppdate subcategory and return success message
     *
     * @param SubCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SubCategoryRequest $request)
    {
        $this->subCateRepository->editSubCategory($request);

        return redirect()->route('subcategory.index')->with('message', 'Cập nhật thành công !');
    }

    /**
     * Delete subcategory and return message
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $this->subCateRepository->delete($request->subcate_id);

        return redirect()->back()->with('message', 'Xóa thành công !');
    }

    /**
     * Get list subcategories after category changed
     *
     * @param Request $request
     * @return unknown[]
     */
    public function cateChange(Request $request)
    {
        $cat_id = $request->category_id;
        $sub_cat = $this->subCateRepository->getAllSubCateById($cat_id);
        $data = [
            'sub_cat' => $sub_cat
        ];

        return $data;
    }
}
