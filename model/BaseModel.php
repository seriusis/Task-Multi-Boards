<?php
namespace app\model;
use Illuminate\Database\Capsule\Manager as Capsule;


class BaseModel{
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
        $this->id_column = 'id';
    }

    public function getAll(){
        $db = Capsule::table($this->table);
        return $db->get()->all();
    }


    public function getById($id){
        return Capsule::table($this->table)
            ->where($this->id_column,'=',$id)
            ->get()
            ->pop();
    }

    public function create($data){

    }


    public function update($id){

    }

    public function delete($id){
        Capsule::table($this->table)->delete($id);
    }
}