<?php
    class Model_Seance extends ORM
    {
        protected $_has_one = array(
            'movie' => array(
                'model' => 'movie',
                'foreign_key' => 'id'
                )
            );
    }
?>