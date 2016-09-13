<?php

namespace App\Http\Controllers;

use Activelogiclabs\Administration\Admin\Core;
use Activelogiclabs\Administration\Admin\FieldComponents\Date;
use Activelogiclabs\Administration\Admin\FieldComponents\Select;
use Activelogiclabs\Administration\Admin\FieldComponents\Wysiwyg;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use Activelogiclabs\Administration\Http\Controllers\AdministrationController;

class ProjectsController extends AdministrationController
{
    public $model = Project::class;
    public $title = "Projects";
    public $icon = 'fa-chevron-right';

    public $fieldDefinitions = [
        'due_date' => [
            'type' => Date::class
        ],
        'notes' => [
            'type' => Wysiwyg::class
        ],
        'status' => [
            'type' => Select::class,
            'options' => [
                'active' => "Active",
                'archived' => "Archived"
            ]
        ]
    ];

    public $overviewFields = [
        'title' => "Title",
        'due_date' => "Due Date",
        'status' => "Status"
    ];

    public $detailGroups = [
        [
            'group_type' => Core::GROUP_STANDARD,
            'group_title' => "General Project Details",
            'group_fields' => [
                'title' => "Title",
                'due_date' => "Due Date",
                'status' => "Status"
            ]
        ],
        [
            'group_type' => Core::GROUP_WYSIWYG,
            'group_title' => "Project Notes",
            'field' => "notes"
        ]
    ];
}
