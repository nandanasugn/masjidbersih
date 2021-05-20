<?php
class MPlace extends CI_Model{
    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function getAllPlace(){
        $this->db->select('*');
        $this->db->from('place_tbl');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getListNearPlaceWithRadius($curLat, $curLon, $radius, $limit = 30, $offset = 0){
        try{
            $sql = "SELECT id, name, address, lat, lon, ROUND(
                ( 6371 * acos( cos( radians( ? ) ) * cos( radians( lat ) )* cos( radians( lon ) - radians( ? ) ) + sin( radians( ? ) )* sin( radians( lat ) ) ) ),3)
                AS Distance
                FROM place_tbl
                HAVING Distance < ?
                ORDER BY Distance LIMIT ? OFFSET ?";

            $query = $this->db->query($sql, array($curLat, $curLon, $curLat, $radius, $limit, $offset));
            return $query->result_array();
        } catch(PDOException $e){
            echo($e->getMessage());
        }
    }
}