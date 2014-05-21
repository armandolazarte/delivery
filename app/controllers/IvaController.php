<?php
class IvaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('retenciones.iva.show');
	}

	public function pdf()
	{
		
		//return PDF::load($vista, 'letter', 'portrait')->download('pdf.pdf');
		//$pdf->loadHTML($vista);
		//return $pdf->stream();
		//$pdf = PDF::loadHTML($vista);
		//return $pdf->stream();

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
			$inputArray = Input::all();
			$ivaData = array(
				'rif_agente' => $inputArray['rif_agente'],
				'beneficiario_nombre' => $inputArray['beneficiario_nombre'],
				'rif_beneficiario' => $inputArray['rif_beneficiario'],
				'periodo' => $inputArray['year'].$inputArray['month'],
				'fecha_facturacion' => $inputArray['date_fact'],
				'nro_factura' => $inputArray['nro_factura'],
				'nro_control' => $inputArray['nro_control'],
				'monto_base' => $inputArray['base_imponible'],
				'iva_retenido' => ($inputArray['base_imponible']*$inputArray['tasa_iva']*$inputArray['tasa_retencion'])/10000,
				'monto_total' => $inputArray['base_imponible']+($inputArray['base_imponible']*$inputArray['tasa_iva'])/100,
				'monto_exento' => 0,
				'nro_nota_credito' => 0,
				'alicuota' => $inputArray['tasa_iva'],
				'tipo_operacion' => 'c',
				'id_comprobante' => $inputArray['numero_comprobante']
			);
			$v = Iva::validate($ivaData);
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
		return View::make('retenciones.iva.show');
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