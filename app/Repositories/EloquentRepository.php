<?php
namespace App\Repositories;

abstract class EloquentRepository implements RepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $_model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->_model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->_model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->_model->find($id);
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->_model->create($attributes);
    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * Delete
     * 
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if($result) {
            $result->delete();
            return true;
        }

        return false;
    }

    /**
     * Genarate slug from string unicode
     * @param  String
     * @return String
     */
    public function slugify($str) 
    {
        $tmp = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $tmp = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $tmp);
        $tmp = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $tmp);
        $tmp = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $tmp);
        $tmp = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $tmp);
        $tmp = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $tmp);
        $tmp = preg_replace("/(đ)/", 'd', $tmp);
        $tmp = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $tmp);
        $tmp = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $tmp);
        $tmp = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $tmp);
        $tmp = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $tmp);
        $tmp = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $tmp);
        $tmp = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $tmp);
        $tmp = preg_replace("/(Đ)/", 'D', $tmp);
        $tmp = strtolower(trim($tmp));
        //$tmp = str_replace('-','',$tmp);
        $tmp = str_replace(' ', '-', $tmp);
        $tmp = str_replace('_', '-', $tmp);
        $tmp = str_replace('.', '', $tmp);
        $tmp = str_replace("'", '', $tmp);
        $tmp = str_replace('"', '', $tmp);
        $tmp = str_replace('"', '', $tmp);
        $tmp = str_replace('"', '', $tmp);
        $tmp = str_replace("'", '', $tmp);
        $tmp = str_replace('̀', '', $tmp);
        $tmp = str_replace('&', '', $tmp);
        $tmp = str_replace('@', '', $tmp);
        $tmp = str_replace('^', '', $tmp);
        $tmp = str_replace('=', '', $tmp);
        $tmp = str_replace('+', '', $tmp);
        $tmp = str_replace(':', '', $tmp);
        $tmp = str_replace(',', '', $tmp);
        $tmp = str_replace('{', '', $tmp);
        $tmp = str_replace('}', '', $tmp);
        $tmp = str_replace('?', '', $tmp);
        $tmp = str_replace('\\', '', $tmp);
        $tmp = str_replace('/', '', $tmp);
        $tmp = str_replace('quot;', '', $tmp);
        return $tmp;
    }
}