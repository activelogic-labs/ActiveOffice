<?php

namespace App\Http\Controllers;

use Activelogiclabs\Administration\Admin\FieldComponents\Password;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Activelogiclabs\Administration\Http\Controllers\AdministrationController;

class UsersController extends AdministrationController
{
    public $model = User::class;
    public $title = "Users";
    public $icon = 'fa-chevron-right';
    public $fieldDefinitions = [
        'password' => [
            'type' => Password::class
        ]
    ];
    public $overviewFields = [];
    public $detailGroups = [];
}
