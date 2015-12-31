<?php

class USStateDropdownField extends DropdownField
{

    private static $default_has_empty = true;

    private static $default_empty_string = 'Please Select';

    protected $extraClasses = array(
        'dropdown'
    );

    public static $states = array(
        'Outside US' => "Outside US",
        'AL' => "Alabama",
        'AK' => "Alaska",
        'Alberta' => "Alberta",
        'AZ' => "Arizona",
        'AR' => "Arkansas",
        'Br. Columbia' => "Br. Columbia",
        'CA' => "California",
        'CO' => "Colorado",
        'CT' => "Connecticut",
        'DE' => "Delaware",
        'DC' => "District of Columbia",
        'FL' => "Florida",
        'GA' => "Georgia",
        'Guam' => "Guam",
        'HI' => "Hawaii",
        'ID' => "Idaho",
        'IL' => "Illinois",
        'IN' => "Indiana",
        'IA' => "Iowa",
        'KS' => "Kansas",
        'KY' => "Kentucky",
        'LO' => "Louisiana",
        'ME' => "Maine",
        'Manitoba' => "Manitoba",
        'MD' => "Maryland",
        'MA' => "Massachusetts",
        'MI' => "Michigan",
        'MN' => "Minnesota",
        'MS' => "Mississippi",
        'MO' => "Missouri",
        'MT' => "Montana",
        'NE' => "Nebraska",
        'NV' => "Nevada",
        'New Brunswick' => "New Brunswick",
        'NH' => "New Hampshire",
        'NJ' => "New Jersey",
        'NM' => "New Mexico",
        'NY' => "New York",
        'Newfoundland' => "Newfoundland",
        'NC' => "North Carolina",
        'ND' => "North Dakota",
        'Nova Scotia' => "Nova Scotia",
        'OH' => "Ohio",
        'OK' => "Oklahoma",
        'Ontaria' => "Ontario",
        'OR' => "Oregon",
        'PA' => "Pennsylvania",
        'Pr. Edward Isl.' => "Pr. Edward Island",
        'PR' => "Puerto Rico",
        'Quebec' => "Quebec",
        'RI' => "Rhode Island",
        'Saskatchewan' => "Saskatchewan",
        'SC' => "South Carolina",
        'SD' => "South Dakota",
        'TN' => "Tennessee",
        'TX' => "Texas",
        'UT' => "Utah",
        'VT' => "Vermont",
        'VA' => "Virginia",
        'WA' => "Washington",
        'WV' => "West Virginia",
        'WI' => "Wisconsin",
        'WY' => "Wyoming"
    );

    public function __construct($name, $title = null, $source = null, $value = "", $form = null, $emptyString = null)
    {
        if (! $source) {
            $source = self::$states;
        }

        if (! $emptyString) {
            $this->hasEmptyDefault = $this->stat('default_has_empty');
            $this->emptyString = $this->stat('default_empty_string');
        }

        parent::__construct($name, $title, $source, $value, $form, $emptyString);
    }

    public static function get_us_states()
    {
        $items = array();
        foreach (self::$states as $key => $value) {
            if ($key) {
                $items[] = array(
                    'Title' => $value,
                    'Value' => $key
                );
            }
        }
        return new ArrayList($items);
    }
}
