<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country2;

class CountryController2 extends Controller
{
    public function actionIndex()
    {
        $query = Country2::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('Nume')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}