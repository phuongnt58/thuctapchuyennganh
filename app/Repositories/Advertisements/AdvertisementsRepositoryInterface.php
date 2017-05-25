<?php
namespace App\Repositories\Advertisements;

interface AdvertisementsRepositoryInterface
{

    /**
     * Create advertisement
     *
     * @param array $request
     */
    public function createAdvertisements($request = []);

    /**
     * Get advertisement position
     */
    public function getPosition();

    /**
     * Edit advertisement information
     *
     * @param array $request
     */
    public function editAdvertisements($request = []);

    /**
     * Count the number of advertisement
     */
    public function countAdvertisement();
}
