<?php
class campaigns_model extends CI_Model {
	private $product_id;
	private $school_name;
 
	
public function __construct(){
$this->load->database();     }

public function get_school(){
$query = $this->db->get('school');
return $query->row_array();}

public function get_university(){
$query = $this->db->get('university');
return $query->row_array();}

public function get_leaders(){
$query = $this->db->get('leader');
return $query->row_array();}


public function get_leadersperschool($school_name){
$query = $this->db->query("select * from leader where school = '"
	.$school_name ."'");
return $query->result_array();}


public function get_leader($leader_id){
$query = $this->db->query("select * from leader where idleader = '"
	.$leader_id ."'");
return $query->result_array();}

public function get_lcampaign($leader_id){
$query = $this->db->query("select * from lcampaign where idlcampaign = '"
	.$leader_id ."'");
return $query->result_array();}

public function get_messages(){
$query = $this->db->get('messages');
return $query->row_array();}




}