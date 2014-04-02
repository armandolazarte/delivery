<?php
	class UtilidadesController extends BaseController {
		public function deploy() {
			$LOCAL_ROOT = "/var/wwww";
			$LOCAL_REPO_NAME = "delivery";
			$LOCAL_REPO = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
			$REMOTE_REPO = "git@github.com:mvilera/delivery.git";
			$BRANCH = "master";
			if($_POST['payload']){
				if(file_exists($LOCAL_REPO)){
					shell_exec("cd {$LOCAL_REPO} && git pull");
					die("done",mktime())
				}else{
					shell_exec("cd {$LOCAL_REPO} && git clone {$REMOTE_REPO}");
					die("done"),mktime())
				}
			}
		}
	}
?>