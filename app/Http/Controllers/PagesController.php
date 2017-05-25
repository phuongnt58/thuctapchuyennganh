<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\News\NewsRepositoriesInterface;
use App\Repositories\SubCategory\SubCategoryRepositoryInterface;
use App\Repositories\Advertisements\AdvertisementsRepositoryInterface;
use App\Repositories\User\UserRepositoriesInterface;
use App\Repositories\Comment\CommentRepositoriesInterface;

class PagesController extends Controller
{

    protected $category;

    protected $news;

    protected $subCategory;

    protected $adv;

    protected $user;

    protected $comment;

    /**
     * Create a new controller instance
     *
     * @param CategoryRepositoryInterface $category
     * @param NewsRepositoriesInterface $news
     * @param SubCategoryRepositoryInterface $subCategory
     * @param AdvertisementsRepositoryInterface $adv
     * @param UserRepositoriesInterface $user
     * @param CommentRepositoriesInterface $comment
     */
    public function __construct(CategoryRepositoryInterface $category, NewsRepositoriesInterface $news, SubCategoryRepositoryInterface $subCategory, AdvertisementsRepositoryInterface $adv, UserRepositoriesInterface $user, CommentRepositoriesInterface $comment)
    {
        $this->category = $category;
        $this->news = $news;
        $this->adv = $adv;
        $this->user = $user;
        $this->comment = $comment;
        $this->subCategory = $subCategory;
        $cate = $this->category->getAll();
        $breaking = $this->news->getNewsCheck('0', '5');
        $adver = $this->adv->getAll();
        $cateId = $this->category->find('1');
        $subCate = $this->subCategory->getAllSubCateById($cateId->id);
        $newsHostSb = $this->news->getOneNewsHot('1', '1');
        $newsRelatedSb = $this->news->getRelatedNews($newsHostSb['news_cate_id'], '2', '5');

        view()->share([
            'category' => $cate,
            'breaking' => $breaking,
            'adv' => $adver,
            'subCate' => $subCate,
            'newsHostSb' => $newsHostSb,
            'newsRelatedSb' => $newsRelatedSb
        ]);
    }

    /**
     * Get all news of categories and return main page
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $slideNews = $this->news->getNewsHot('0', '4');
        $newsHost = $this->news->getOneNewsHot('0', '1');
        $newsRelated = $this->news->getRelatedNews($newsHost['news_cate_id'], '1', '5');
        $newsHotLeft = $this->news->getNewsHot('1', '3');

        // tin giải trí
        $entertain = $this->category->getCateBySlug('giai-tri');
        $newsEntertain = $this->news->getAllNewsCate($entertain->id);

        // tin khoa học
        $technology = $this->category->getCateBySlug('khoa-hoc');
        $newsTech = [];
        if($technology)
        {
            $newsTech = $this->news->getAllNewsCate($technology->id);
        }

        // tin thể thao
        $sport = $this->category->getCateBySlug('the-thao');
        $newsSport = $this->news->getAllNewsCate($sport->id);

        return view('pages.main', [
            'slideNews' => $slideNews,
            'newsHost' => $newsHost,
            'newsRelated' => $newsRelated,
            'newsHotLeft' => $newsHotLeft,
            'newsEntertain' => $newsEntertain,
            'newsTech' => $newsTech,
            'newsSport' => $newsSport
        ]);
    }

    /**
     * Show the detail of one news
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function single(Request $request)
    {
        $news = $this->news->getNewsSingle($request->slug);
        $user = $this->user->getUser($news['news_user_id']);
        $newsRelated = $this->news->getNewsCategory($news['news_cate_id'], '0', '5');
        $comm = $this->comment->getComment($news['id']);
        $newsSubCate = $this->subCategory->getBySelected($news['news_cate_id']);
        $newsCate = $this->category->find($newsSubCate['category_id']);
        $breadcrumb[] = $newsCate['category_name'];
        $breadcrumb[] = $newsSubCate['sub_category_name'];

        return view('pages.single', [
            'news' => $news,
            'user' => $user,
            'newsRelated' => $newsRelated,
            'comment' => $comm,
            'breadcrumb' => $breadcrumb
        ]);
    }

    /**
     * Get all categories for menu bar
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function cate(Request $request)
    {
        $cate = $this->category->getCateBySlug($request->slug);
        $subCate = $this->subCategory->getAllSubCateById($cate->id);
        $cateNews = $this->category->getCateBySlug($request->slug);
        $news = $this->news->getAllNewsCate($cateNews->id);

        view()->share([
            'subCate' => $subCate
        ]);

        return view('pages.group', [
            'newsCate' => $news
        ]);
    }

    /**
     * Search news with keyword
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function search(Request $request)
    {
        $searchNews = $this->news->searchNews($request->key);

        return view('pages.search', [
            'key' => $request->key,
            'searchNews' => $searchNews
        ]);
    }

    /**
     * Create new comment and display for viewer
     *
     * @param Request $request
     * @return unknown
     */
    public function comment(Request $request)
    {
        $this->comment->createComment($request);

        return $this->comment->getLastComment();
    }

    /**
     * Get all news of subcategories
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function sub(Request $request)
    {
        $subCate = $this->subCategory->getAllSubCateBySlug($request->slug);

        if (count($subCate) > 0) {
            $news = $this->news->getAllNewsSubCate($subCate['id']);
        } else {
            $news = $this->news->getAllNewsSubCate($request->slug);
        }

        return view('pages.group', [
            'newsCate' => $news
        ]);
    }
}
