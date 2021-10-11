<?php
class Survey_model extends CI_Model {
    
        public function get_perusahaan_all()
        {
            $query = $this->db->select('*')
                                ->get('perusahaan');
                                
            return $query->result(); 
        }
        
        public function get_perusahaan_by_id($id)
        {
            $query = $this->db->select('*')
                                ->where('id', $id)
                                ->get('perusahaan');
                                
            return $query->row();
        }
        
        public function delete($id)
        {
            $this->db->delete('perusahaan', array('id' => $id));
        }
        
        public function user_by_perusahaan($id_perusahaan)
        {
                $this->db->select('A.id, B.nama_perusahaan, B.alamat, A.nip, A.id_perusahaan, A.id_batch, A.status')
                                ->from('user_survey as A')
                                ->join('perusahaan as B', 'A.id_perusahaan = B.id')
                                ->where('A.id_perusahaan', $id_perusahaan);
                                $query = $this->db->get();

                return $query->result();                
        }
        
        public function get_perusahaan_by_kode($kode)
        {
            $query = $this->db->select('*')
                                ->where('kode_perusahaan', $kode)
                                ->get('perusahaan');
                                
            return $query->row();                    
        }
        
        public function get_user($usr)
        {
                $query = $this->db->select('*')
                                ->where('username', $usr)
                                ->get('peserta_survey');

                return $query->row();
        }
        
        public function check_from_id($id)
        {
            $query = $this->db->select('*')
                                ->where('id_user', $id)
                                ->get('hasil_survey');

            return $query->row();
        }
        
        public function get_time($id)
        {
            $query = $this->db->query("select * from timer_survey where id = ".$id);
            return $query->row();
        }
        
        public function get_soal($id)
        {
            $query = $this->db->query("select * from soal_survey where id_perusahaan = '".$id."'order by no_soal asc");
            return $query->result();
        }
        
        public function get_count($id)
        {
            $query = $this->db->query("select * from soal_survey where id_perusahaan = '".$id."'order by no_soal asc");
            return $query->num_rows();
        }
        
        public function get_hasil($id)
        {
            $query = $this->db->query("select * from hasil_survey where id_tes =".$id);
            return $query->row();
        }
        
        public function data($id, $number, $offset)
        {
            $query = $this->db->query("select * from soal_survey where id_perusahaan = '".$id."' order by no_soal asc LIMIT ".$offset.", ".$number."");
            return $query->row();
        }
        
        public function get_report($perusahaan, $type)
        {
            $this->db->select('*');
            $this->db->from('jawaban_survey');
            $this->db->join('user_survey', 'jawaban_survey.id_user = user_survey.id');
            $this->db->where('user_survey.id_perusahaan',$perusahaan);
            $this->db->where('jawaban_survey.jenis',$type);
            $query = $this->db->get();
            
            
            return $query->result();
        }
        
        public function batch_by_perusahaan($id_perusahaan)
        {
                $this->db->select('*')
                                ->from('batch as A')
                                ->join('perusahaan as B', 'A.perusahaan_id = B.id')
                                ->where('A.perusahaan_id', $id_perusahaan);
                                $query = $this->db->get();

                return $query->result();                
        }
        
        public function get_batch_by_id($id)
        {
            $query = $this->db->select('*')
                                ->where('id_batch', $id)
                                ->get('batch');
                                
            return $query->row();
        }

        public function get_user_by_id($id)
        {
            $query = $this->db->select('*')
                                ->where('id', $id)
                                ->get('user_survey');
                                
            return $query->row();
        }
        
        public function get_batch_by_kode($kode)
        {
            $query = $this->db->select('*')
                                ->where('enroll', $kode)
                                ->get('batch');
                                
            return $query->row();                    
        }

        public function get_last_batch()
        {
            $query = $this->db->select('id_batch')
                                ->get('batch');
            
            return $query->last_row();
        }
        
        public function user_by_time($user)
        {
                $this->db->select('*')
                                ->from('peserta_survey as A')
                                ->join('perusahaan as B', 'A.id_perusahaan = B.id')
                                ->join('batch as C', 'B.id = C.perusahaan_id')
                                ->where('A.id_user', $user);
                                $query = $this->db->get();

                return $query->row();                
        }

        public function get_user_range($id_peru, $start, $end)
        {
            $this->db->select('*')
                                ->from('peserta_survey')
                                ->where('id_perusahaan', $id_peru);
                                $query = $this->db->get();

                return $query->row(); 
        }
        
        public function get_question_survey($id_perusahaan, $jenis)
        {
            $this->db->select('*');
            $this->db->from('soal_survey');
            $this->db->where('id_perusahaan', $id_perusahaan);
            $this->db->where('jenis', $jenis);
            $query = $this->db->get();
            
            return $query->result(); 
        }

        public function user_verification($nip){
            $this->db->select('*');
            $this->db->from('user_survey');
            $this->db->join('batch', 'user_survey.id_batch = batch.nama_batch');
            $this->db->where('nip', $nip);
            $query = $this->db->get();
            
            return $query->row(); 
        }
        
        public function soal_by_perusahaan($id_perusahaan)
        {
                $this->db->select('*')
                                ->from('soal_survey as A')
                                ->join('perusahaan as B', 'A.id_perusahaan = B.id')
                                ->where('A.id_perusahaan', $id_perusahaan);
                                $query = $this->db->get();

                return $query->result();                
        }
        
}