<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2018/1/11
 * Time: 10:44
 */
class User_model extends CI_Model{
    public function add($name){
        $this->db->insert('t_user',array(
            'name'=>$name
        ));
        return $this->db->affected_rows();
    }
    public function user_list(){
        $query=$this-> db -> get("t_user");
//        $query=$this->db->get_where("t_user",array('name'=>'gcz'));
        return $query->result();

    }
}