<?php

class Model_Users extends Orm\Model 
{
    protected static $_table_name = 'Users';
    protected static $_primary_key = array('id');
    protected static $_properties = array
    ('id' => array('data_type'=>'int'), // both validation & typing observers will ignore the PK
     'userName' => array(
            'data_type' => 'varchar',
            'validation' => array('required', 'max_length' => array(100))
        ),
     'email' => array(
                'data_type' => 'varchar',
                'validation' => array('required', 'max_length' => array(100))   
            ),
     'password' => array(
                'data_type' => 'varchar',
                'validation' => array('required', 'max_length' => array(200))   
            ),
     'id_device' => array(
                'data_type' => 'varchar',
                'validation' => array('required', 'max_length' => array(100))   
            ),
     'profilePicture' => array(
                'data_type' => 'varchar',
                'validation' => array('max_length' => array(300))   
            ),
     'id_role' => array(
                'data_type' => 'int',
                'validation' => array('required', 'max_length' => array(100))
                ),
     'x' => array(
                'data_type' => 'varchar',
                'validation' => array('required', 'max_length' => array(100))
                ),
     'y' => array(
                'data_type' => 'varchar',
                'validation' => array('required', 'max_length' => array(100))
                )

    );
    protected static $_belongs_to = array(
        'role' => array(
            'key_from' => 'id_role',
            'model_to' => 'Model_Roles',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );
    protected static $_has_many = array(
    'animals' => array(
        'key_from' => 'id',
        'model_to' => 'Model_Animals',
        'key_to' => 'id_user',
        'cascade_save' => true,
        'cascade_delete' => true,
        ),
    'story' => array(
        'key_from' => 'id',
        'model_to' => 'Model_Stories',
        'key_to' => 'id_user',
        'cascade_save' => true,
        'cascade_delete' => true,
        )
    );
    

}