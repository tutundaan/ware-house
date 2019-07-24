<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GoodRequest as StoreRequest;
use App\Http\Requests\GoodRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class GoodCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class GoodCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\Good');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/good');
        $this->crud->setEntityNameStrings('good', 'goods');
        $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
