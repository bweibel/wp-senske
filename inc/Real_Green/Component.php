<?php
/**
 * WP_Rig\WP_Rig\Real_Green\Component class
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig\Real_Green;

use WP_Rig\WP_Rig\Component_Interface;
use function add_filter;

/**
 * Class for integration of CF7 with the Real Green API 
 *
 *
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'real-green';
	}

    /**
	 * Adds the action and filter hooks to integrate with WordPress and CF7.
	 */
	public function initialize() {
        add_action('wpcf7_before_send_mail', array( $this,  'on_submit' ), 10, 3);
    }

    function on_submit( $form, &$abort, $submission ) {
        // Promo Form and Request Estimate form IDs
        if ($abort === true || !( $form->ID() == 2723 || $form->ID() == 2524 ) ) {
            return;
        }

        $data = $submission->get_posted_data();

        $zip = sanitize_text_field($data['zip']);
        $email = sanitize_text_field($data['email']);
        $firstName = sanitize_text_field($data['first-name']);
        $lastName = sanitize_text_field($data['last-name']);
        $name = $firstName . $lastName;
        $street = sanitize_text_field($data['street']);

        $response = wp_safe_remote_post('https://saapi.realgreen.com/LeadForm/Submit?apiKey=38615f4f-3a2e-4ec5-bcb4-0343923a85e9', [
            'body' => json_encode([
                'name' 					=> $name,
                'zipcode' 				=> $zip,
                'streetNumberAndName'	=> $street,
                'emailAddress'			=> $email,
                'sourceCode'			=> 48,
                'firstName'				=> $firstName,
                'lastName'				=> $lastName,
                'actionReasonID'		=> 2,
                'employeeID'			=> 'COR9240'	
            ]),
        ]);

        if (is_wp_error($response)) {
            $abort = true;

            $body = wp_remote_retrieve_body($response);
            $result = json_decode($body);

            $submission->set_response($result->responseMessage);
        }
    }
	
}
