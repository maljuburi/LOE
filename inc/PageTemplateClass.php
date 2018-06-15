<?php


class PageTemplate{

    public $current;
    public $parent;
    public $grandparent;
    public $children;

    function __construct(){
        $this->current = get_post();
        $this->parent = get_post($this->current->post_parent);
        $this->grandparent = get_post($this->parent->post_parent);
        $this->children = get_pages(array(
		'child_of'			=> $this->current->ID,
		'parent'			=> $this->current->ID,
		'hierarchical'		=> 0
        ));
        asort($this->children);
    }

}
