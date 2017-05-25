<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Repositories\News\NewsRepositoriesInterface;
use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsEditRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\SubCategory\SubCategoryRepositoryInterface;

class NewsController extends Controller
{

    protected $news;

    protected $category;

    protected $sub_category;

    /**
     * Create a new controller instance
     *
     * @param NewsRepositoriesInterface $news
     * @param CategoryRepositoryInterface $category
     * @param SubCategoryRepositoryInterface $sub_category
     */
    public function __construct(NewsRepositoriesInterface $news, CategoryRepositoryInterface $category, SubCategoryRepositoryInterface $sub_category)
    {
        $this->news = $news;
        $this->category = $category;
        $this->sub_category = $sub_category;
    }

    /**
     * Get all news and return the view of list news
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        if (Auth::user()->user_role == 1) {
            $news = $this->news->getAll();
        } else {
            $news = $this->news->getNewsByUser(Auth::user()->id);
        }
        $sub_cate = $this->sub_category->getAll();
        return view('admin.news.list', [
            'news' => $news,
            'sub_cate' => $sub_cate
        ]);
    }

    /**
     * View detail of one news in list news
     *
     * @param unknown $slug
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function view($slug)
    {
        $news = $this->news->findBySlug($slug);
        $cats = $this->sub_category->getAll();

        return view('admin.news.view', [
            'news' => $news,
            'cats' => $cats
        ]);
    }

    /**
     * Return the view of action create news
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add()
    {
        $cates = $this->category->getAll();
        return view('admin.news.add', [
            'cates' => $cates
        ]);
    }

    /**
     * Create news and return success message
     *
     * @param NewsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsRequest $request)
    {
        $this->news->createNews($request);
        return redirect()->route('news.index')->with([
            'success' => 'Thêm bài viết thành công.'
        ]);
    }

    /**
     * Delete news and return message
     *
     * @param unknown $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $this->news->destroyNews($id);
        return redirect()->route('news.index')->with([
            'success' => 'Xóa bài viết thành công.'
        ]);
    }

    /**
     * Return the view of action update news
     *
     * @param unknown $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getEdit($id)
    {
        $news = $this->news->find($id);
        $cates = $this->category->getAll();
        $sub_cate = $this->sub_category->getAll();
        $selected_sub_cate = $this->sub_category->getBySelected($news->news_cate_id);
        return view('admin.news.edit', [
            'news' => $news,
            'cates' => $cates,
            'sub_cate' => $sub_cate,
            'selected_sub_cate' => $selected_sub_cate
        ]);
    }

    /**
     * Update news and return success message
     *
     * @param unknown $id
     * @param NewsEditRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit($id, NewsEditRequest $request)
    {
        $this->news->editNews($id, $request);
        return redirect()->route('news.index')->with([
            'success' => 'Sửa bài viết thành công.'
        ]);
    }

    /**
     * Check if news is valid and return message
     *
     * @param unknown $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function check($id)
    {
        $this->news->checkNews($id);
        return redirect()->route('news.index')->with([
            'success' => 'Duyệt bài viết thành công.'
        ]);
    }

    /**
     * Get list news is not checked
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getNewsNotCheck()
    {
        $news = $this->news->getNewsNotCheck();
        $sub_cate = $this->sub_category->getAll();

        return view('admin.news.listCheck', [
            'news' => $news,
            'sub_cate' => $sub_cate
        ]);
    }
}
