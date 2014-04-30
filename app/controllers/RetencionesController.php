<?php
class RetencionesController extends BaseController {

	public function getIndex(){
		$content = View::make('layout.xml')->render();

		File::put(storage_path().'/file.xml', $content);
		 $headers = array(
              'Content-Type: application/xml',
            );
		return Response::download(storage_path().'/file.xml', 'file.xml', $headers);
		//return Response::make($content, 200)->header('Content-Type','application/xml');
	}
}
?>