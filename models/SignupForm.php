<?php
/**
 * Created by PhpStorm.
 * User: Ден
 * Date: 27.04.2019
 * Time: 1:42
 */

namespace app\models;


use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $passwordReload;


    public function rules()
    {
        return [
            ['username','required','message' => 'Необходимо заполнить поле',],
            // ['username','string','min' => 3,'tooShort' => 'You nickname is very short'],
            ['password','required','message' => 'Необходимо заполнить поле'],
            ['passwordReload','required','message' => 'Необходимо заполнить поле'],
           // ['password', 'compare', 'compareAttribute' => 'passwordReload'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Nickname',
            'password' => 'Password',
        ];
    }


}