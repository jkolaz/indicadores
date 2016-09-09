<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright		Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @copyright		Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;
        public $_url_logout = "admin/administrator/cerrar_sesion";
        var $_carpeta, $_class, $_method, $_param= '';
        var $_txt_message = '';
        var $_rol = 0;
        /**
	 * Constructor
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();
		$this->_carpeta = str_replace('/', '', $this->router->fetch_directory());
		$this->_class = $this->router->fetch_class();
		$this->_method = $this->router->fetch_method();
                $path_controller = '/'.$this->_carpeta.'/'.$this->_class.'/'.$this->_method;
                if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] !=""){
                    $this->_param = str_replace($path_controller, '', $_SERVER['PATH_INFO']);
                }
                if($this->session->userdata('idRol')){
                    $this->_rol = $this->session->userdata('idRol');
                }
		log_message('debug', "Controller Class Initialized");
                $this->verificar();
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
                
        public function verificar(){
            $id = $this->session->userdata('user');
            if($this->_carpeta == ''){
                switch ($this->_class){
                    case 'index':
                        if($id>0){
                            redirect('seguridad/principal/index');
                        }
                        break;
                }
            }else{
                $filtrar = 1;
                switch ($this->_carpeta){
                    case 'seguridad':
                        switch ($this->_class){
                            case 'seguridad':
                                switch ($this->_method){
                                    case 'ingresar_sistema':
                                    case 'nopermiso':
                                    case 'logout':
                                        $filtrar = 0;
                                        break;
                                }
                                break;
                            case 'principal':                                
                            case 'permiso':
                                $filtrar = 0;
                                break;
                        }
                        break;
                    case 'prueba':
                        $filtrar = 0;
                        break;
                }
                
                
                if($filtrar == 1){
                    if($id>0){
                        $rol = $this->session->userdata('idRol');
                        $this->getPermiso($rol, $this->_class, $this->_method);
                    }else{
                        $this->session->set_userdata('message_id', 2);
                        $this->session->set_userdata('message', 'ERR6');
                        redirect(URL_NO_LOGIN);
                    }
                }
            }
        }
        
        public function senMailNew($subjet, $destino, $cuerpo, $reply = "", $from_name = "", $nombre_usuario="", $patch_attach = "", $template_main = "", $template = ""){
            $this->load->library('My_PHPMailer');
            $this->load->library('Template_Mail');
            
            if ($template_main == "") {
                $main_template = "main";
            } else {
                $main_template = $template_main;
            }
            
            if ($template == "") {
                $template = "generic";
            }
            
            $html = new Template_Mail();
            $mail = new My_PHPMailer();
            
            $html->templateMail($template.".html");
            $mailBody = $html->getHtml($cuerpo);
            
            $mail_vars['title'] = $mail->FromName;
            $mail_vars['html_mail_content'] = $mailBody;
            
            $mailing = new Template_Mail();
            $mailing->templateMail($main_template.".html");
            $body_html = $mailing->getHtml($mail_vars);
            
            $mail->IsSMTP();
            if($from_name != ""){
                $mail->FromName = $from_name;
            }
            if($reply == ""){
                $reply = 'info@jkolaz.com';
            }
            $mail->AddReplyTo($reply);
            $mail->Subject    = $subjet;  //Asunto del mensaje
            $body = $mail->MsgHTML($body_html);
            $mail->Body = $body;
            $mail->AltBody = strip_tags($body);
            $mail->AddAddress($destino, $nombre_usuario);
            if (!empty($patch_attach)) {
                $mail->AddAttachment($patch_attach);      // attachment
            }
            $rs_mail = $mail->Send();
            if (!$rs_mail) {
                imprimir($mail->ErrorInfo); 
                exit;
            }
        }
        
        public function setMessage($idMessage){
            $message = array();
            $message['ERR001'] = 'El correo y/o contraseña es incorrecto.';
            $message['ERR002'] = 'No se registro correctamente el registro.';
            $message['OK001'] = 'Ingresó correctamente al sistema.';
            
            $this->_txt_message = $message[$idMessage];
        }
        
        public function writeLog($mensaje, $admin = 0, $tipo = "", $level=1){
            /*
             * var @$level
             * 1: info
             * 2: warming
             */
            if($admin == 0){
                $admin = $this->session->userdata('user');
            }
            if($tipo == ""){
                $tipo = "web";
            }
            $archivo = PATH_ADMIN."application/logs/".$tipo."/".date("Ymd").".log";
            if ( ! $fp = @fopen($archivo, FOPEN_WRITE_CREATE)){
                die('No se pudo crear el fichero...!');
            }
            $linea = array();
            $linea[] = date('Y-m-d H:i:s');
            $linea[] = $mensaje;
            $linea[] = $admin;
            $linea[] = $_SERVER['SERVER_NAME'];
            $linea[] = $_SERVER['REQUEST_URI'];
            $linea[] = $_SERVER['HTTP_USER_AGENT'];
            $linea[] = $level;
            $linea[] = ObtenerIP();
            
            $lineatext = implode('|', $linea)."\n";
            
            flock($fp, LOCK_EX);
            fwrite($fp, $lineatext);
            flock($fp, LOCK_UN);
            fclose($fp);

            @chmod($archivo, FILE_WRITE_MODE);
            return TRUE;
        }
        
        public function getPermiso($rol, $pagina){
            $verificar = 1;
            
            switch ($pagina){
                case 'pagina':
                    $verificar = 0;
                    break;
            }
            
            if($verificar == 1){
                $permiso = $this->permiso_model->getPermiso($rol, $pagina);
                if($permiso <= 0){
                    redirect(URL_NO_PERMISO);
                }
            }
        }
        
        public function getPermisoOS($pagina){
            $rol = $this->session->userdata('idRol');
            $this->permiso_model->_access = $pagina;
            $permiso = $this->permiso_model->getPermiso($rol);
            if($permiso <= 0){
                redirect(URL_NO_PERMISO);
            }
        }
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */