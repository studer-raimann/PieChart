<?php

namespace srag\PieChart\Component;

/**
 * Interface LegendEntry
 *
 * @package srag\PieChart\Component
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface LegendEntry
{

    /**
     * Get the y percentage in which this should be displayed inside the SVG
     *
     * @return float
     */
    public function getYPercentage() : float;


    /**
     * Get the reversed y percentage in which this should be displayed inside the SVG
     *
     * @return float
     */
    public function getReversedYPercentage() : float;


    /**
     * Get the x percentage in which this should be displayed inside the SVG
     *
     * @return float
     */
    public function getTextYPercentage() : float;

    /**
     * Get the reversed x percentage in which this should be displayed inside the SVG
     *
     * @return float
     */
    public function getReversedTextYPercentage() : float;


    /**
     * Get the size of the colored square that is on the left of the title text
     *
     * @return float
     */
    public function getSquareSize() : float;


    /**
     * Get the size of the title text
     *
     * @return float
     */
    public function getTextSize() : float;


    /**
     * Get the title of this legend entry
     *
     * @return string
     */
    public function getTitle() : string;
}
