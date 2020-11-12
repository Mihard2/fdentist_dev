<?php
class reCaptha {
    //Singleton

    private $publicKey;
    private $secretKey;
    private $googleReCapthcaURI;
    private static $_instance=null;

    private function __construct()
    {
        $this->publicKey='6LdHgrYUAAAAADWdOj_wFjYpb0wW1S7WmEAjObaY';
        $this->secretKey='6LdHgrYUAAAAABbbLZOejDQJjrLsP3oG2l9pwdLM';
        $this->googleReCapthcaURI='https://www.google.com/recaptcha/api/siteverify';

        add_action('before_complainform_submit', array($this,'add_google_captcha'));

        add_action('wp_enqueue_scripts', array($this,'reCaptchaScript'));

        add_filter('script_loader_tag', array($this,'add_async_attribute'), 10, 2);
    }

    protected function __clone(){ }

    static public function getInstance(){
        if(is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function add_async_attribute($tag, $handle) {
    if ( 'google-recaptcha' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}

    function add_recaptcha_inside_div(){
        ?>
        <div class="form-group">
            <div style="width: 243px; margin: 0 auto; transform: scale(0.8); transform-origin: 0;" class="g-recaptcha" data-sitekey= "<?php echo $this->publicKey ?>"></div>
            <div class="captcha-error"><span></span></div>
        </div>
        <?php
    }

    function add_google_captcha()
    {
        echo '<div style="width: 243px; margin: 0 auto; transform: scale(0.8); transform-origin: 0;" class="g-recaptcha" data-sitekey= "'.$this->publicKey . '"></div>';
        echo '<div class="captcha-error"><span></span></div>';
    }

    function reCaptchaScript()
    {
        if (is_page_template('homepage.php')) {
            wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js');
        }
    }
    function recaptcha_respons()
    {
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
        }
        if (!$captcha) {
            $result=new WP_Error();
            $result->add('nocaptcha','Пожалуйста, проверьте ввод капчи');
            return $result;
        }

        // calling google recaptcha api.
        $post_body = array(
            'secret' => $this->secretKey,
            'remoteip'   => $_SERVER["REMOTE_ADDR"],
            'response'   => $captcha
        );
        $args = array( 'body' => $post_body );
        $response = json_decode(wp_remote_retrieve_body(wp_remote_post($this->googleReCapthcaURI,$args)));

        if ($response->success == false) {
            $result=new WP_Error();
            $result->add('spam','Пожалуйста, не спамьте');
            return $result;
        } else {
            return true;
        }
    }
}
$customCaptcha= reCaptha::getInstance();
?>
