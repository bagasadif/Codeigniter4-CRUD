<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengunjung_model extends Model
{
    protected $table = 'pengunjung';

    public function getPengunjung($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function savePengunjung($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePengunjung($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletePengunjung($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}
