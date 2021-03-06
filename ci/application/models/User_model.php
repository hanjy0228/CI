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

    public  function del_user($id){
        $this->db->delete('t_user', array('id' => $id));
        return $this->db->affected_rows();
    }

    public  function get_user_by_id($id){
       $query= $this->db->get_where("t_user",array('id'=>$id));
        return $query->row();
    }
    public function update($id,$name){
        $this->db->where('id',$id);
        $this->db->update('t_user',array("name"=>$name,
            ));
        return $this->db->affected_rows();
    }
}