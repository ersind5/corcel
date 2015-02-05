<?php

/**
 * Category class
 *
 * @author Yoram de Langen <yoramdelangen@gmail.com>
 */
class Category extends Corcel\TermTaxonomy
{
	protected $connection = 'wordpress';
    /**
     * Used to set the post's type
     */
    protected $taxonomy = 'category';
}