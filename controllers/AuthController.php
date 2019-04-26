<?php
/**
 * Created by PhpStorm.
 * User: Ден
 * Date: 26.04.2019
 * Time: 12:40
 */

namespace app\controllers;


use app\models\LoginForm;

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
    public function actionLogin()
    {

       // echo password_hash('www',PASSWORD_DEFAULT);

        $model = new LoginForm();
       if($model->load(Yii::$app->request->post())){
           if( $model->validate() )
           {


               $_user = Users::findByLogin($model->username);
//               echo '$_user->login = '.$_user->login;
//               echo '$model->username = '.$model->username;

               if($_user->login == $model->username && (password_verify($model->password,$_user->password))== true) {
                   Yii::$app->session->setFlash('success','Вы успешно вошли в систему');
//                   echo '<pre>'.'ok';
//                   print_r($_user);
//                   exit();
               }
           }
           else
               Yii::$app->session->setFlash('error','Ошибка');

       }
            //$login = Yii::$app->request->post('login');
//            echo '<pre>'.'lk';
//            print_r($login);



        //$model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
}