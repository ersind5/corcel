<?php

namespace Corcel;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Term extends Eloquent
{
	protected $connection = 'wordpress';
    protected $table = 'terms';
    protected $primaryKey = 'term_id';
}