<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->getCategories();
        echo view('templates/header.php');
        echo view('pages/category/index.php',$data);
        echo view('templates/footer.php');

    }

    public function create()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->getCategories();
        echo view('templates/header.php');
        echo view('pages/category/create.php',$data);
        echo view('templates/footer.php');

    }

    public function save()
    {
        helper('form');
        $model = new CategoryModel();

        if(! $this->validate([
            'category' => 'required',
        ])){
            $session = \Config\Services::session();
            $session->setFlashData("failure", "Something wrong !!");
        } else {
            $model->save([
                'category' => $this->request->getVar('category'),
                'parent_id' => $this->request->getVar('parent_id') == '0' ? NULL : $this->request->getVar('parent_id') ,
            ]);
            $session = \Config\Services::session();
            $session->setFlashData("success", "Successfully Added Category");
        }
        
        return redirect()->to('/category');
    }

    public function select()
    {
        parse_str($_SERVER['QUERY_STRING'], $_GET);

        $model = new CategoryModel();
        if(!isset($_GET['parent_id'])){
            $data['categories'] = $model->getSpecificCategories();
            echo view('templates/header.php');
            echo view('pages/category/select.php',$data);
            echo view('templates/footer.php');
        } else {
           echo json_encode($model->getSpecificCategories($_GET['parent_id']));
        }


    }



}
