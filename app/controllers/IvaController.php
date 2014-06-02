<?php


class IvaController extends \BaseController {

	public function __construct(IvaRepository $iva, IvaProcess $proceso){
		$this->iva = $iva;
		$this->metodos = $proceso;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = $this->iva->paginarTodos(10);
		return View::make('retenciones.iva.index')->with('tabla_iva',$data);
	}

	public function pdf($id)
	{
		return PDF::loadView('retenciones.iva.show')->setPaper('letter')->setOrientation('portrait')->setOptions(array(
			'disable-smart-shrinking'	=> 	null,
			'lowquality' => null,
			'enable-javascript' => true,
			'dpi' => 200
			))->stream();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('retenciones.iva.add');//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(is_array(Input::all())){
			$v = $this->metodos->crearRegistro(Input::all());
			if($v->passes()){
				return Redirect::to('iva/create')->with('ivaSuccess',true);
			}else{
				return Redirect::to('iva/create')->withErrors($v)->withInput();
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if(isset($id)&&($id>0)){
			$data = $this->iva->buscarPorId($id);
			return View::make('retenciones.iva.show')->with('ivaRetencionData',$data);	
		}else{
			return dd($id);
		}
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		
	}

	public function generarTXT()
	{
		return $this->metodos->generarTXT(1,5,2014);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}