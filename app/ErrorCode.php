<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Exception;
use Validator;

class ErrorCode extends Eloquent
{
     /**
     * error_code table primary key
     *
     * @var int
     */
    protected $primaryKey = '_id';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'message'
    ];

    public static function loginValidation($input)
    {
//        $credentials['email'] = $input['email'] ?? NULL;
//        $credentials['password'] = $input['password'] ?? NULL;

            Validator::make($credentials, [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ], [
                'email.required' =>ErrorCode::errcode('X-105'),
                'email.email' =>ErrorCode::errcode('X-106'),
                'password.required' =>ErrorCode::errcode('X-121'),
                'password.min' =>ErrorCode::errcode('X-108'),
            ])->validate();
    }

}
