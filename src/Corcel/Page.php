<?php

namespace Corcel;

class Page extends Post
{
	protected $connection = 'wordpress';
    protected $postType = 'page';
}