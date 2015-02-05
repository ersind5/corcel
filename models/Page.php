<?php 

/**
 * Page class
 * 
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Page extends Corcel\Post
{
	protected $connection = 'wordpress';
    /**
     * Used to set the post's type
     */
    protected $postType = 'page';
}