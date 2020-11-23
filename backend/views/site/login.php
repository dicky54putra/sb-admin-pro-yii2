<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login" style="background-color: #0061f2;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                                    <div class="form-group">
                                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control py-4', 'placeholder' => 'Username']) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= $form->field($model, 'password')->textInput(['autofocus' => true, 'class' => 'form-control py-4', 'placeholder' => 'Password', 'type' => 'password']) ?>

                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                                        </div>
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Garuda Sarana Sejahtera</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>