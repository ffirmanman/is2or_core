<?php

namespace PhpOffice\PhpSpreadsheet\Style;

use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;

class Border extends Supervisor
{
    // Border style
    public const BORDER_NONE = 'none';
    public const BORDER_DASHDOT = 'dashDot';
    public const BORDER_DASHDOTDOT = 'dashDotDot';
    public const BORDER_DASHED = 'dashed';
    public const BORDER_DOTTED = 'dotted';
    public const BORDER_DOUBLE = 'double';
    public const BORDER_HAIR = 'hair';
    public const BORDER_MEDIUM = 'medium';
    public const BORDER_MEDIUMDASHDOT = 'mediumDashDot';
    public const BORDER_MEDIUMDASHDOTDOT = 'mediumDashDotDot';
    public const BORDER_MEDIUMDASHED = 'mediumDashed';
    public const BORDER_SLANTDASHDOT = 'slantDashDot';
    public const BORDER_THICK = 'thick';
    public const BORDER_THIN = 'thin';
    public const BORDER_OMIT = 'omit'; // should be used only for Conditional

    /**
     * Border style.
     *
     * @var string
     */
    protected $borderStyle = self::BORDER_NONE;

    /**
     * Border color.
     *
     * @var Color
     */
    protected $color;

    /**
     * @var null|int
     */
    public $colorIndex;

    /**
     * Create a new Border.
     *
     * @param bool $isSupervisor Flag indicating if this is a supervisor or not
     *                           Leave this value at default unless you understand exactly what
     *                           its ramifications are
     */
    public function __construct($isSupervisor = false, bool $isConditional = false)
    {
        // Supervisor?
        parent::__construct($isSupervisor);

        // Initialise values
        $this->color = new Color(Color::COLOR_BLACK, $isSupervisor);

        // bind parent if we are a supervisor
        if ($isSupervisor) {
            $this->color->bindParent($this, 'color');
        }
        if ($isConditional) {
            $this->borderStyle = self::BORDER_OMIT;
        }
    }

    /**
     * Get the shared style component for the currently active cell in currently active sheet.
     * Only used for style supervisor.
     *
     * @return Border
     */
    public function getSharedComponent()
    {
        /**
         * @var Style
         */
        $parent = $this->parent;

        /**
         * @var Borders $sharedComponent
         */
        $sharedComponent = $parent->getSharedComponent();
        switch ($this->parentPropertyName) {
            case 'bottom':
                return $sharedComponent->getBottom();
            case 'diagonal':
                return $sharedComponent->getDiagonal();
            case 'left':
                return $sharedComponent->getLeft();
            case 'right':
                return $sharedComponent->getRight();
            case 'top':
                return $sharedComponent->getTop();
        }

        throw new PhpSpreadsheetException('Cannot get shared component for a pseudo-border.');
    }

    /**
     * Build style array from subcomponents.
     *
     * @param array $array
     *
     * @return array
     */
    public function getStyleArray($array)
    {
        /**
         * @var Style
         */
        $parent = $this->parent;

        return $parent->/*
 * @scrutinizer ignore-call
*/ getStyleArray([$this->parentPropertyName => $array]);
    }

    /**
     * Apply styles from array.
     *
     * <code>
     * $spreadsheet->getActiveSheet()->getStyle('B2')->getBorders()->getTop()->applyFromArray(
     *        [
     *            'borderStyle' => Border::BORDER_DASHDOT,
     *            'color' => [
     *                'rgb' => '808080'
     *            ]
     *        ]
     * );
     * </code>
     *
     * @param array $styleArray Array containing style information
     *
     * @return $this
     */
    public function applyFromArray(array $styleArray)
    {
        if ($this->isSupervisor) {
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($this->getStyleArray($styleArray));
        } else {
            if (isset($styleArray['borderStyle'])) {
                $this->setBorderStyle($styleArray['borderStyle']);
            }
            if (isset($styleArray['color'])) {
                $this->getColor()->applyFromArray($styleArray['color']);
            }
        }

        return $this;
    }

    /**
     * Get Border style.
     *
     * @return string
     */
    public function getBorderStyle()
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getBorderStyle();
        }

        return $this->borderStyle;
    }

    /**
     * Set Border style.
     *
     * @param bool|string $style
     *                           When passing a boolean, FALSE equates Border::BORDER_NONE
     *                           and TRUE to Border::BORDER_MEDIUM
     *
     * @return $this
     */
    public function setBorderStyle($style)
    {
        if (empty($style)) {
            $style = self::BORDER_NONE;
        } elseif (is_bool($style)) {
            $style = self::BORDER_MEDIUM;
        }

        if ($this->isSupervisor) {
            $styleArray = $this->getStyleArray(['borderStyle' => $style]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->borderStyle = $style;
        }

        return $this;
    }

    /**
     * Get Border Color.
     *
     * @return Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set Border Color.
     *
     * @return $this
     */
    public function setColor(Color $color)
    {
        // make sure parameter is a real color and not a supervisor
        $color = $color->getIsSupervisor() ? $color->getSharedComponent() : $color;

        if ($this->isSupervisor) {
            $styleArray = $this->getColor()->getStyleArray(['argb' => $color->getARGB()]);
            $this->getActiveSheet()->getStyle($this->getSelectedCells())->applyFromArray($styleArray);
        } else {
            $this->color = $color;
        }

        return $this;
    }

    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        if ($this->isSupervisor) {
            return $this->getSharedComponent()->getHashCode();
        }

        return md5(
            $this->borderStyle .
            $this->color->getHashCode() .
            __CLASS__
        );
    }

    protected function exportArray1(): array
    {
        $exportedArray = [];
        $this->exportArray2($exportedArray, 'borderStyle', $this->getBorderStyle());
        $this->exportArray2($exportedArray, 'color', $this->getColor());

        return $exportedArray;
    }
}
