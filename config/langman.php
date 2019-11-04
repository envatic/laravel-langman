<?php

return [
    /*
     * --------------------------------------------------------------------------
     * Path to the language directories
     * --------------------------------------------------------------------------
     *
     * This option determines the path to the languages directory, it's where
     * the package will be looking for translation files. These files are
     * usually located in resources/lang but you may change that.
     */

    'path' => realpath(base_path('resources/lang')),
	/*
     * --------------------------------------------------------------------------
     * Path to the vuejs components directories
     * --------------------------------------------------------------------------
     *
     * This option determines the path to the vuejs components directory, it's where
     * the package will be looking .vue files. These files are
     * usually located in resources/js/components but you may change that.
     */
    'vuepath' => realpath(base_path('resources/js/components')),
];
