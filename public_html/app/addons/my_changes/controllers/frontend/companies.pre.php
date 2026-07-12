<?php

defined('BOOTSTRAP') or die('Access denied');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($mode === 'apply_for_vendor') {

        $file_fields = isset($_REQUEST['file_profile_fields']) ? $_REQUEST['file_profile_fields'] : [];

        $allowed_extensions = ['doc', 'pdf', 'jpg', 'png'];
        $uploaded_files = fn_filter_uploaded_data('profile_fields', $allowed_extensions);

        foreach ($file_fields as $field_id => $file) {
            if (!empty($file) && !array_key_exists($field_id, $uploaded_files)) {
                fn_save_post_data('user_data', 'company_data');

                $ext = fn_get_file_ext($file);
                fn_set_notification('E', __('error'), __('text_not_allowed_to_upload_file_extension', array(
                    '[ext]' => $ext
                )));
                
                return [CONTROLLER_STATUS_REDIRECT, 'companies.apply_for_vendor'];
            }
        }
    }
}
