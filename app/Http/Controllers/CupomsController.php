<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminCupomRequest;

use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\CupomRepository;


class CupomsController extends Controller
{

    /**
     * @var Cupoms
     */
    private $repository;

    public function __construct(CupomRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $cupoms = $this->repository->paginate(); //padrao 15

        return view('admin.cupoms.index', compact('cupoms'));
    }

    public function create()
    {
        return view('admin.cupoms.create');
    }

    public function store(AdminCupomRequest $request)
    {
        $data = $request->all();
        //dd($data);
        $this->repository->create($data);
        //redirecionar depois que grava
        return redirect()->route('admin.cupoms.index');
        //return view('admin.categories.store');
    }

    public function edit($id)
    {
       $category = $this->repository->find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.categories.index');
    }
}
