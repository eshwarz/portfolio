<?php
class Post extends ActiveRecord\Model {
	
	static $table_name = 'pavsesh_posts';
	static $validates_presence_of = array(array('post'));

}
