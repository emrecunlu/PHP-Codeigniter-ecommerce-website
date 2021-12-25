<?php

    class ProductImages_model extends CI_Model
    {

        private $table_name = 'product_images';

        public function __construct()
        {

            parent::__construct ();

        }

        public function insert ( $data)
        {

            $added = $this -> db
                -> insert ( $this -> table_name, $data);

            if ( $this -> db -> affected_rows() > 0) return true;

            return false;

        }

    }

?>