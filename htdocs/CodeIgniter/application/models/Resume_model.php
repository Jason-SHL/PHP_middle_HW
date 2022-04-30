<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume_model extends CI_Model {

  function select_db($user_account,$user_password){
    $this->db->select('*');
    $this->db->where('account',$user_account);
    $this->db->where('password',$user_password);
    $query = $this->db->get('account');

    return $query->row_array();
  }

  function update_db($data)
  	{
  		$this->db->update('about', $data);
  		//返回資料庫受影響數 判斷與法是否正確執行
  		return $this->db->affected_rows(); //回傳影響筆數
  	}


  function select_about(){
    $this->db->select('*');
    $query = $this->db->get('about');
    return $query->row_array();
  }
}
