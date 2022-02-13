<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    protected $table = 'category';
    protected $allowedFields = ['category', 'parent_id'];
    protected $returnType     = 'array';


    public function getCategories(){
            return $this->findAll();
        //  return $this->select('SELECT * FROM category a INNER JOIN category b
        // ON a.id = b.parent_id', FALSE);
    
    }

    
    public function getSpecificCategories($parent_id = NULL){
            return $this->asArray()->where('parent_id' , $parent_id)->findAll();
    }
}