<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Advertisements\AdvertisementsRepositoryInterface;
use App\Http\Requests\AdvertisementsRequest;

class AdvertisementsController extends Controller
{

    protected $advertisementsRepository;

    /**
     * Create a new controller instance
     *
     * @param AdvertisementsRepositoryInterface $advertisementsRepository
     */
    public function __construct(AdvertisementsRepositoryInterface $advertisementsRepository)
    {
        $this->advertisementsRepository = $advertisementsRepository;
    }

    /**
     * Get all advertisements and return the view of list advertisements
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $data = $this->advertisementsRepository->getAll();

        return view('admin.advertisements.list', [
            'data' => $data
        ]);
    }

    /**
     * Return the view of action create advertisement
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('admin.advertisements.add', [
            'position' => $this->advertisementsRepository->getPosition()
        ]);
    }

    /**
     * Create new advertisement and return the success message
     *
     * @param AdvertisementsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdvertisementsRequest $request)
    {
        $this->advertisementsRepository->createAdvertisements($request);

        return redirect()->route('advertisements.index')->with('message', 'Thêm thành công !');
    }

    /**
     * Return the view of action update advertisement information
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Request $request)
    {
        $data = $this->advertisementsRepository->find($request->id);

        return view('admin.advertisements.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update advertisement information and return the success message
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $data = $this->advertisementsRepository->editAdvertisements($request);

        return redirect()->route('advertisements.index')->with('message', 'Cập nhật thành công !');
    }

    /**
     * Delete advertisement and return the success message
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $this->advertisementsRepository->delete($request->adv_id);

        return redirect()->back()->with('message', 'Xóa thành công !');
    }
}
