<?php

namespace App\Repositories\User;

use Illuminate\Http\Request;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\Hash;

class UserRepositories extends EloquentRepository implements UserRepositoriesInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }

    /**
     * Createu user
     *
     * @see \App\Repositories\User\UserRepositoriesInterface::createUser()
     */
    public function createUser(Request $request)
    {
        $data = [];

        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['user_phone'] = $request->phone;
        $data['user_birthday'] = date('Y-m-d', strtotime($request->birthday));
        $data['user_role'] = 2;

        $this->_model->create($data);
    }

    /**
     * destroyUser
     * @param  array  $param [description]
     * @return [type]        [description]
     */
    public function destroyUser($param = [])
    {
        return $this->_model->find($param['id_user'])->delete();
    }

    /**
     * update infomation user
     * @param  array  $param [description]
     * @return [type]        [description]
     */
    public function updateUser($param = [])
    {
        $user = $this->_model->find($param['id']);

        $user['username'] = $param['user']['username'];
        $user['user_fullName'] = $param['user']['user_fullName'];
        $user['user_birthday'] = $param['user']['user_birthday'];
        $user['user_phone'] = $param['user']['user_phone'];
        $user['user_address'] = $param['user']['user_address'];

        return $user->save();
    }

    /**
     * change uploadImage
     * @param  array   $param   [description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function uploadImage($param = [], Request $request)
    {
        $user = $this->_model->find($param['id']);
        $fileName = '';

        if ($request->hasFile('imageFile')){
            $file = $request->file('imageFile');
            $fileName = str_random(10).$file->getClientOriginalName();
            $file->move('image/img', $fileName);
            $user['user_image'] = $fileName;
            $user->save();

            return $user->save();
        } else {
            echo "File notfound";
        }
	}

	/**
	 * Get user by id
	 *
	 * @param integer $id
	 * @return mixed
	 */
    public function getUser($id)
    {
        return $this->_model->find($id);
    }

    /**
     * Count number of user
     *
     * @return integer
     */
    public function countUser()
    {
        $count = $this->_model->count();

        return $count;
    }
}
