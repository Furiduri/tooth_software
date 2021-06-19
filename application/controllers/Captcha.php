<?php defined('BASEPATH') or exit('No direct script access allowed');


/**
 * Captcha Controller
 *
 * @package Controllers
 */
class Captcha extends EA_Controller {
    /**
     * Make a request to this method to get a captcha image.
     */
    public function index()
    {
        header('Content-type: image/jpeg');
        $builder = new Gregwar\Captcha\CaptchaBuilder;
        $builder->build();
        $this->session->set_userdata('captcha_phrase', $builder->getPhrase());
        $builder->output();
    }
}
