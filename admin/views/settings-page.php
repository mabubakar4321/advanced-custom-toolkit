<div class="wrap act-admin">
    <h1>Advanced Custom Toolkit</h1>

    <form method="post" action="options.php" class="act-form">
        <?php settings_fields('act_group'); ?>

        <table class="form-table">
            <tr>
                <th>Custom Message</th>
                <td>
                    <input type="text" name="act_message"
                        value="<?php echo esc_attr(get_option('act_message')); ?>"
                        class="regular-text" />
                </td>
            </tr>
        </table>

        <?php submit_button('Save Settings'); ?>
    </form>
</div>