<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
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
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;

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

		$this->load->_base_classes =& is_loaded();

		$this->load->_ci_autoloader();

		log_message('debug', "Controller Class Initialized");

	}

	public static function &get_instance()
	{
		return self::$instance;
	}

    public function soketqua_mega()
    {
        $data = array();
        $data['start_date'] = $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
        $data['number'] = $this->input->post('number');
        $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');

        if ($this->form_validation->run() == TRUE) {
            //type =1S?p x?p theo t?n su?t 2S?p x?p theo th? t?

            $start_date = $this->util->ConvertDateXuoi($data['start_date']);
            $end_date = $this->util->ConvertDateXuoi($data['end_date']);
            $start_date_int = strtotime($start_date);
            $end_date_int = strtotime($end_date);

            $last40curent = $this->db->query(" SELECT `thuquay`, `ngayquayint`, `ngayquay`, `giatrijackport`, `chuoitrunggiai`,`sojackport`,`id`,kiquay FROM `soxo_mega` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");

        } else {

            $start_date = $this->util->ConvertDateXuoi(date("01/01/2017"));
            $end_date = $this->util->ConvertDateXuoi(date("d/m/Y"));
            $data['start_date'] = date("01/01/2017");
            $data['end_date'] = date("d/m/Y");
            $start_date_int = strtotime($start_date);
            $end_date_int = strtotime($end_date);

            $last40curent = $this->db->query(" SELECT `thuquay`, `ngayquayint`, `ngayquay`, `giatrijackport`, `chuoitrunggiai`,`sojackport`,`id`,kiquay FROM `soxo_mega` WHERE  trangthai=1 and ngayquayint>='$start_date_int' and ngayquayint<='$end_date_int' order by ngayquayint desc");


        }


        $data['last40curent'] = $last40curent;
        $this->render($this->load->view('ketquasoxo/soketqua_mega', $data, TRUE), '3col');

    }
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */