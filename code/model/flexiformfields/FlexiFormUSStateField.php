<?php

class FlexiFormUSStateField extends FlexiFormField
{

    private static $field_class = 'USStateDropdownField';

    private static $field_label = 'US State Field';

    private static $field_description = 'Displays a dropdown of US States.';


    public function getDefaultValueFormField($field_name = 'FieldDefaultValue')
    {
        $field = new USStateDropdownField($field_name, 'Default Value');
        $field->setEmptyString('none');

        $field->description = 'Optional. This value will be preselectd.';
        return $field;
    }

}