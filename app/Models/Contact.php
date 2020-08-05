<?php

namespace App\Models;

use App\Presenters\DatePresenter;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use DatePresenter;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacts';
}
