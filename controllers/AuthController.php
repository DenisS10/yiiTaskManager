<?php
/**
 * Created by PhpStorm.
 * User: Ден
 * Date: 26.04.2019
 * Time: 12:40
 */

namespace app\controllers;


use app\models\LoginForm;

use app\models\SignupForm;
use app\models\Users;
use Yii;
use yii\web\Controller;


class AuthController extends Controller
{
    public function actionIndex()
    {
//        Users::findByLogin('www');
//        exit();
//        Users::getLoginById(76);
//        Users::getPassById(76);
//        return $this->render('index', [
//            'model' => '',
//        ]);
        //$this->getUser();
    }

    /**
     * @return string
     */
    public function actionLogin()
    {

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $_user = Users::findByLogin($model->username);
                if ($_user->login == $model->username && password_verify($model->password, $_user->password) == true) {
                    header('location: main/index');
                    Yii::$app->session->setFlash('success', 'Вы успешно вошли в систему');
                    Yii::$app->session->set('auth','ok');
                }
            } else
                Yii::$app->session->setFlash('error', 'Ошибка');

        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionSignup()
    {

        $model = new SignupForm();

        $newUser = new Users();
        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {

                if ($model->password === $model->passwordReload) {


                    $_password = password_hash($model->password, PASSWORD_DEFAULT);
                    $newUser->login = $model->username;
                    $newUser->user_name = 'NoName';
                    $newUser->password = $_password;
                    $newUser->first_time = time();
                    $newUser->save();
                    $this->refresh();
                      // $newUser->errors;
                }
            }


        }
        return $this->render('signup', [
            'model' => $model,
        ]);

    }
}