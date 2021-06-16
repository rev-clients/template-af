<?php	function Aplana($str) {
			$str = utf8_decode($str);
			$vals = ["+","?",utf8_decode("¿"),"!",utf8_decode("¡"),"/","(",")",".",",",";",":",utf8_decode("º"),utf8_decode("ª")];
			$guions = ["----","---","--"];
			$str = strtr($str, utf8_decode("áéíóúäëïöüàèìòùâêîôûñÂÊÎÔÛÁÉÍÓÚÄËÏÖÜÀÈÌÒÙÑÇ_ "), "aeiouaeiouaeiouaeiounaeiouaeiouaeiouaeiounc--");
			$str = strtolower(str_replace("'","",$str));
			$str = str_ireplace($vals,"",$str);
			$str = str_replace(utf8_decode('"'),'',$str);
			$str = str_replace($guions,"-",$str);
			return utf8_encode($str);
		}

		function MailCode($email) {
			$coded = '';
			$uncoded = str_split($email);
			$uncoded = array_reverse($uncoded);
			$step = 1;
			if(strstr($email,'@')) $step = -1;
			foreach($uncoded as $key => $val) {
				$coded .= chr(ord($val) + $step);
			}
			return $coded;
		}

		function LimHead($texto,$cols) {
			$ancho = 1130;
			if(isset($_SESSION["wide"])) {
				if($_SESSION["wide"] != '') $ancho = $_SESSION["wide"];
			}
			$return = '-';
			if($texto != '') {
				$maxcars = floor($ancho / $cols / 6);
				$return = $texto;
				if(strlen($return) > $maxcars) {
					$return = wordwrap($return, $maxcars);
					$return = substr($return, 0, strpos($return, "\n"));
				}
			}
			return $return;
		}

		function Minider($set) {
			$return = substr(strtolower($set),0,3);
			return $return;
		}

		function FechaSchem($dato,$sep) {
			return date('j',$dato).$sep.date('n',$dato).$sep.date('y',$dato);
		}

		function FechaHour($dato,$sep) {
			return date('j',$dato).$sep.date('n',$dato).$sep.date('y',$dato).' '.date('m:s',$dato);
		}

		function CastToDate($dato,$separador) {
			$temp = explode($separador,$dato);
			$texto = $temp[2].'/'.$temp[1].'/'.$temp[0];
			return $texto;
		}

		function Avatarea($user) {
			$image = 'images/sinavatar.jpg';
	///		if(isset($_SESSION['persnl']) && $user == 0) $user = MiId();
			if(file_exists('images/users/user-'.$user.'.jpg')) {
				$image = 'images/users/user-'.$user.'.jpg';
			}
			return $image;
		}

		function MiId() {
			$temp = explode('|',$_SESSION['persnl']);
			return $temp[0];
		}

		function cleanTmes($id,$rs) {
			if($rs != '') {
				$temp = explode(',',$rs);
				$temp = array_diff($temp, [$id]);
				if(!empty($temp)) {
					$rs = implode(',',$temp);
					if($rs == ',' || $rs == ',,') $rs = '';
				} else {
					$rs = '';
				}
			}
			return $rs;
		}

		function getIpAg() {
			$ipAdress = 'Desc.';
			if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ipAdress = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ipAdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ipAdress = $_SERVER['REMOTE_ADDR'];
			}
			return $ipAdress;
		}

		$arr_checks = ['','checked '];
?>