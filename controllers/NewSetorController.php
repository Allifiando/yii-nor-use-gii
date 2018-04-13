<?php

namespace app\controllers;

use Yii;
use app\models\NewSetor;
use app\models\TambahsetoranForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class NewSetorController extends \yii\web\Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $newsetor = NewSetor::find()->all();
        return $this->render('index',['newsetor'=>$newsetor]);
    }

    public function actionTambahsetoran()
    {
        $model = new TambahsetoranForm();
        $tabel = new NewSetor();

        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            //$tabel->id = $model->id;
            $tabel->tgl_jual = $model->tgl_jual;
            $tabel->jumlah = $model->jumlah;
            $tabel->terjual = $model->terjual;
            $tabel->untung = $model->untung;

            if($tabel->save())
            {
                return $this->redirect(['index']);
            }
        }
        else
        {
            return $this->render('tambahsetoran',['model'=>$model]);
        }
    }

    public function actionView($id)
    {
        //$setor = NewSetor::find()->where(['id'=>$id])->one();
        return $this->render('view',[
            'model'=> $this->findModel($id)]);    
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = NewSetor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
