<?php

namespace app\controllers\Admin;

use app\Controllers\Controller;
use app\components\models\Image;

class PhotosController extends Controller
{
    private $imageModel;

    public function __construct(Image $imageModel)
    {
        parent::__construct();
        $this->imageModel = $imageModel;
    }

    public function index()
    {
        $photos = $this->imageModel->getAll();
        //$photos = $this->database->getAll('photos');
        echo $this->view->render('admin/photos/index', ['images' => $photos]);
    }

    public function create()
    {

    }

    public function edit()
    {
        dd("Вы на edit");
    }
}

?>