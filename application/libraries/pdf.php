<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * CodeIgniter DomPDF Library
 *
 * Generate PDF's from HTML in CodeIgniter
 *
 * @packge        CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author        Ardianta Pargo
 * @license        MIT License
 * @link        https://github.com/ardianta/codeigniter-dompdf
 */

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf
{
    /**
     * PDF filename
     * @var String
     */
    protected $ci;
    private $filename;

    public function __construct()
    {
        parent::__construct();
        $this->ci = &get_instance();
        //$this->filename = "laporan.pdf";
    }
    public function setFileName($filename)
    {
        $this->filename = $filename;
    }
    /**
     * Get an instance of CodeIgniter
     *
     * @access    protected
     * @return    void
     */
    protected function ci()
    {
        return get_instance();
    }
    /**
     * Load a CodeIgniter view into domPDF
     *
     * @access    public
     * @param    string    $view The view to load
     * @param    array    $data The view data
     * @return    void
     */
    public function load_view($view, $data = array())
    {
        $options = new Options();
        $options->setChroot(FCPATH);
        $options->set('isRemoteEnabled', TRUE);
        //$options->setDefaultFont('courier');
        $dompdf = new Dompdf($options);
        $dompdf->getOptions()->getChroot();

        $this->setOptions($options);

        $html = $this->ci->load->view($view, $data, TRUE);
        $this->loadHtml($html);
        //$this->load_html($html);

        // Render the PDF
        $this->render();
        // Output the generated PDF to Browser
        $this->stream($this->filename, array("Attachment" => false));
    }
}
