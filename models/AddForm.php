<?php
/**
 * Created by PhpStorm.
 * User: Ден
 * Date: 28.04.2019
 * Time: 16:11
 */

namespace app\models;


use yii\base\Model;

class AddForm extends Model
{
    public $task;
    public $deadline;

    public function rules()
    {
        return [
            ['username','required','message' => 'Необходимо заполнить поле',],
            // ['username','string','min' => 3,'tooShort' => 'You nickname is very short'],
            ['password','required','message' => 'Необходимо заполнить поле'],
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