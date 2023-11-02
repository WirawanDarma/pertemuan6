<?php
class m_data extends ci_model{
    function ambil_data() {
        return $this->db->get('user');
    }
}