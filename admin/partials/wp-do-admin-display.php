<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       bispo-mobile.net
 * @since      1.0.0
 *
 * @package    Wp_Do
 * @subpackage Wp_Do/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="cleanup_options" action="options.php">

        <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        $DigitalOceanApiKey = $options['DigitalOceanApiKey'];

        ?>

        <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
        ?>


        <fieldset>
            <p>Please input here your Digital Ocean API Key</p>
            <legend class="screen-reader-text"><span><?php _e('Input your Digital Ocean API Key', $this->plugin_name); ?></span></legend>
            <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-DigitalOceanApiKey" name="<?php echo $this->plugin_name; ?>[DigitalOceanApiKey]" value="<?php if(!empty($DigitalOceanApiKey)) echo $DigitalOceanApiKey; ?>"/>
        </fieldset>


        <?php submit_button('Save', 'primary','submit', TRUE); ?>


</div>


