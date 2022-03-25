<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['userid', 'password', 'name', 'phone', 'email'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'userid' => 'trim|required|min_length[5]|max_length[20]|is_unique[admins.userid]',
        'password' => 'trim|required|min_length[6]|max_length[255]',
        'name' => 'trim|required|min_length[3]|max_length[100]',
        'phone' => 'permit_empty|min_length[10]|max_length[11]|numeric',
        'email' => 'permit_empty|valid_email',
    ];
    protected $validationMessages = [
        'userid' => [
            'required' => '아이디는 필수로 입력하셔야 합니다.',
            'min_length' => '아이디는 최소 5자 이상입니다.',
            'max_length' => '아이디는 최대 20자 이하입니다.',
            'is_unique' => '이미 등록된 아이디가 있습니다.',
        ],
        'password' => [
            'required' => '비밀번호는 필수로 입력하셔야 합니다.',
            'min_length' => '비밀번호는 최소 6자 이상입니다.',
            'max_length' => '비밀번호는 최대 255자 이하입니다.',
        ],
        'name' => [
            'required' => '이름은 필수로 입력하셔야 합니다.',
            'min_length' => '이름은 최소 3자 이상입니다.',
            'max_length' => '이름은 최대 100자 이하입니다.',
        ],
        'phone' => [
            'min_length' => '연락처는 최소 10자 이상입니다.',
            'max_length' => '연락처는 최대 11자 이하입니다.',
            'numeric' => '숫자만 입력하셔야 합니다.',
        ],
        'email' => [
            'min_length' => '이메일은 최소 5자 이상입니다.',
            'max_length' => '이메일은 최대 100자 이하입니다.',
            'valid_email' => '이메일 형식이 올바르지 않습니다.',
        ],
    ];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = ['hasPassword'];
    protected $afterInsert = [];
    protected $beforeUpdate = ['hasPassword'];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    // save callback
    protected function hasPassword($data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}