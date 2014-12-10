<?php

/**
 * A FlexiFormMultiSelectField enhanced on the frontend via:
 *   https://github.com/wenzhixin/multiple-select
 */
class FlexiFormJQMultiSelectField extends FlexiFormMultiSelectField
{
    // NOTE: this field replaces FlexiFormMultiSelectField, see _config
    private static $can_create = true;

    private static $field_description = 'Displays supplied options to choose one or more from. jQuery Enhanced.';

    public function getFormField($title = null, $value = null, $required = false)
    {
        $field = parent::getFormField($title, $value, $required);

        FlexiFieldsUtil::css(array(
            'jquery.multiple.select.css'
        ));
        FlexiFieldsUtil::js(array(
            'jquery.multiple.select.min.js'
        ));

        $field->addExtraClass('jq-multiple-select');

        return $field;
    }

}