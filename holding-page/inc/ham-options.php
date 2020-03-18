<?php
class HeartsAndMindsOptionsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Contructor
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'add_ham_options_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_ham_options_page() {
        add_menu_page(
            'Hearts and Minds Options', 
            'Hearts and Minds', 
            'manage_options', 
            'ham-options', 
            array( $this, 'create_admin_page' ),
            'dashicons-admin-generic',
            3
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page() {
        $this->options = get_option( 'ham_options' );
        ?>
        <div class="wrap">
            <h1>Hearts and Minds</h1>
            <form method="post" action="options.php">
            <?php
                settings_fields( 'ham_option_group' );
                do_settings_sections( 'ham-settings' );
                submit_button();
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init() {        
        register_setting(
            'ham_option_group',
            'ham_options',
            array( $this, 'sanitize' )
        );

        add_settings_section(
            'webmaster_tools',
            'Webmaster tools verification',
            array( $this, 'print_section_info' ),
            'ham-settings'
        );  

        add_settings_field(
            'google_verification',
            'Google verification code',
            array( $this, 'google_verification_callback' ),
            'ham-settings',
            'webmaster_tools'       
        );      

        add_settings_field(
            'yahoo_verification',
            'Yahoo verification code',
            array( $this, 'yahoo_verification_callback' ),
            'ham-settings',
            'webmaster_tools'       
        );   

        add_settings_field(
            'bing_verification', 
            'Bing verification code', 
            array( $this, 'bing_verification_callback' ), 
            'ham-settings', 
            'webmaster_tools'
        );      
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize($input) {
        $new_input = array();
        if( isset( $input['google_verification'] ) )
            $new_input['google_verification'] = sanitize_text_field( $input['google_verification'] );

        if( isset( $input['yahoo_verification'] ) )
            $new_input['yahoo_verification'] = sanitize_text_field( $input['yahoo_verification'] );

        if( isset( $input['bing_verification'] ) )
            $new_input['bing_verification'] = sanitize_text_field( $input['bing_verification'] );

        return $new_input;
    }

    /** 
     * Print the Section text
     */
    public function print_section_info() {
        print 'Enter your webmaster verification codes in the fields below';
    }

    /** 
     * Get the google value from the settings option array
     */
    public function google_verification_callback() {
        printf(
            '<input type="text" id="google_verification" name="ham_options[google_verification]" value="%s" />',
            isset( $this->options['google_verification'] ) ? esc_attr( $this->options['google_verification']) : ''
        );
    }

    /** 
     * Get the yahoo value from the settings option array
     */
    public function yahoo_verification_callback() {
        printf(
            '<input type="text" id="yahoo_verification" name="ham_options[yahoo_verification]" value="%s" />',
            isset( $this->options['yahoo_verification'] ) ? esc_attr( $this->options['yahoo_verification']) : ''
        );
    }

    /** 
     * Get the bing value from the settings option array
     */
    public function bing_verification_callback() {
        printf(
            '<input type="text" id="bing_verification" name="ham_options[bing_verification]" value="%s" />',
            isset( $this->options['bing_verification'] ) ? esc_attr( $this->options['bing_verification']) : ''
        );
    }
}

if (is_admin()) {
    $hearts_and_minds_options_page = new HeartsAndMindsOptionsPage();
}
