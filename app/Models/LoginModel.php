<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user-table';
    protected $primaryKey = "id";
    protected $allowedFields =
        ['firstname', 'lastname', 'email', 'phone', 'Password', 'image', 'status', 'created-at'];

    public function savedata($Data)
    {
        $this->insert($Data);
        return $this->insertID();
    }
    public function getUser($email)
    {
        return $this->where('email', $email)->first();
    }
    public function saveCat($AddCat)
    {
        $this->db->table('categories')->insert($AddCat);
        // return $this->insertID();
    }
    // display category
    public function getCatData()
    {
        return $this->db->table('categories')
            ->get()
            ->getResultArray();
        // return $query->result_array();
    }
    // Delete category
    public function delCat($id)
    {
        return $this->db->table('categories')->where('id', $id)->delete();
        // return $this->db->delete('categories');
    }
    // Update category
    public function updateCategory($id, $CData)
    {
        return $this->db->table('categories')->where('id', $id)->update($CData);
    }

    // Save slider data in DB
    public function saveSlide($SData)
    {
        return $this->db->table('slider')->insert($SData);
    }
    // Display slider data on page
    public function getSlider()
    {
        return $this->db->table('slider')
            ->get()
            ->getResultArray();
    }
    public function updateSlider($id, $SData)
    {
        return $this->db->table('slider')->where('id', $id)->update($SData);
    }
    public function delslide($id)
    {
        return $this->db->table('slider')->where('id', $id)->delete();
    }

    public function saveImage($imagedata)
    {
        return $this->db->table('images')->insert($imagedata);
    }

    // Project Models
    public function savePr($data)
    {
        $this->db->table('projects')->insert($data);
        return $this->db->insertID();
    }
    public function getCombinedData()
    {
        return $this->db->table('projects')
            ->select('projects.*, GROUP_CONCAT(images.image) as images')
            ->join('images', 'images.idProject = projects.id', 'left')
            ->groupBy('projects.id')
            ->get()
            ->getResultArray();
    }

    public function delProject($id)
    {
        return $this->db->table('projects')->where('id', $id)->delete();
    }
    public function deleteImagesByProjectId($projectId)
    {
        $this->db->table('images')->where('idProject', $projectId)->delete();
    }

    public function insertProject($data)
    {
        $this->db->table('projects')->insert($data);
        return $this->db->insertID();
    }

    public function insertImage($data)
    {
        $this->db->table('images')->insert($data);
    }
}
