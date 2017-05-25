<?php
namespace App\Repositories\Advertisements;

use App\Repositories\EloquentRepository;
use Carbon\Carbon;

class AdvertisementsEloquentRepository extends EloquentRepository implements AdvertisementsRepositoryInterface
{

    /**
     * get model
     *
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Advertisment::class;
    }

    /**
     * Create advertisement
     *
     * @see \App\Repositories\Advertisements\AdvertisementsRepositoryInterface::createAdvertisements()
     */
    public function createAdvertisements($request = [])
    {
        $data = $request->all();

        if ($request->hasFile('adv_url')) {
            $file = $request->file('adv_url');
            $fileName = str_random(10) . $file->getClientOriginalName();
            $file->move('image/adv', $fileName);
            $data['adv_url'] = $fileName;
        } else {
            echo "File notfound";
        }
        $data['expired_day'] = date('Y-m-d', strtotime($data['expired_day']));
        $data['created_day'] = Carbon::now()->format('Y-m-d');

        $this->create($data);
    }

    /**
     * Get position of advertisement
     *
     * @see \App\Repositories\Advertisements\AdvertisementsRepositoryInterface::getPosition()
     */
    public function getPosition()
    {
        $data = $this->getAll();
        $position = [];

        foreach ($data as $value) {
            $position[] = $value['adv_position'];
        }

        return $position;
    }

    /**
     * Edit advertisement information
     *
     * @see \App\Repositories\Advertisements\AdvertisementsRepositoryInterface::editAdvertisements()
     */
    public function editAdvertisements($request = [])
    {
        $data = $request->all();

        if ($request->hasFile('adv_url')) {
            $file = $request->file('adv_url');
            $fileName = str_random(10) . $file->getClientOriginalName();
            $file->move('image/adv', $fileName);
            $data['adv_url'] = $fileName;
        } else {
            $arr = $this->find($data['id']);
            $data['adv_url'] = $arr['adv_url'];
        }
        $data['expired_day'] = date('Y-m-d', strtotime($data['expired_day']));

        $this->update($data['id'], $data);
    }

    /**
     * Count number of advertisements
     *
     * @return integer
     */
    public function countAdvertisement()
    {
        $countAdv = $this->_model->count('url_company');

        return $countAdv;
    }
}
