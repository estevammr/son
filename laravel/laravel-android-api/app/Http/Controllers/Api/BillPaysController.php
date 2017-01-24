<?php

namespace LaravelAndroid\Http\Controllers\Api;

use Illuminate\Http\Request;
use LaravelAndroid\Http\Requests\BillPayRequest;
use LaravelAndroid\Repositories\BillPayRepository;
use LaravelAndroid\Http\Controllers\Controller;

class BillPaysController extends Controller
{

    /**
     * @var BillPayRepository
     */
    protected $repository;

    public function __construct(BillPayRepository $repository)
    {
        $this->repository = $repository;
        $this->repository->applyMultitenancy();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BillPayCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BillPayRequest $request)
    {
    	$data = $request->except('done');
		$billPay = $this->repository->create($data);
		return response()->json($billPay, 201);
	}

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  BillPayUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(BillPayRequest $request, $id)
    {
		$billPay = $this->repository->update($request->all(), $id);
		return response()->json($billPay, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        
        if ($deleted) {
        	return response()->json([], 204);
        } else {
        	return response()->json(['error' => 'Resource cannot deleted'], 500);
        }
    }
    
    public function calculateTotal()
    {
    	return $this->repository->calculateTotal();
    }
}
