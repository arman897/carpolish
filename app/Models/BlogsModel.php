<?php
 
namespace App\Models;

use CodeIgniter\Model;

Class BlogsModel extends Model
    
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'b_img', 
        'b_tags',
        'b_title', 
        'b_desc', 
        'b_slug'  ,
        'published_on'      
    ];




    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
   

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
     protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}