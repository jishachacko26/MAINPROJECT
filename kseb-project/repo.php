<?php

use SKien\XFPDF\XPDF;

class ExampleXPDF extends XPDF
public function __construct(string $orientation = 'P') 
    {
        parent::__construct($orientation);
         // ...
    $this->initGrid('xfpdf-sample.json');

    // define page header and -footer
    $this->setLogo('images/elephpant.png');
    $this->setLogoHeight(9.0);
    $this->addPageFooter("Seite: {PN}/{NP}\tAuthor: S.Kien\t{D} {T}");
     $this->initGrid('xfpdf-sample.json');
     $this->setLogo('images/elephpant.png');
    $this->setLogoHeight(9.0);
    $this->addPageFooter("Page: {PN}/{NP}\tAuthor: S.Kien\t{D}");
     $this->addCol('Row', 10, 'R', XPDF::COL_ROW_NR, XPDF::FLAG_TOTALS_TEXT);
    $this->addCol('Date', 35, 'C', 'date', XPDF::FLAG_DATE);
    $this->addCol('Text', -1, 'L', 'text');
    $this->addCol('Grp.', 12, 'C', self::MY_GRP_COL);
    $this->addCol('Weight', 20, 'R', 'weight', XPDF::FLAG_TOTALS_CALC | XPDF::FLAG_NUMBER);
    $iImgCol = $this->addCol(-1, 8, 'C', self::MY_IMAGE_COL, XPDF::FLAG_IMAGE | XPDF::FLAG_TOTALS_EMPTY);
    $this->addCol('Price', 25, 'R', 'price', XPDF::FLAG_TOTALS_CALC | XPDF::FLAG_CUR_SYMBOL);
    $this->addCol('Cost per Kg', 25, 'R', self::MY_CALC_COL, XPDF::FLAG_TOTALS_EMPTY);

    // enable the totals/pagetotals and carry-over functionality
    $this->enableTotals(XPDF::TOTALS | XPDF::PAGE_TOTALS | XPDF::CARRY_OVER);
    $this->setTotalsText(
        "My Totals over all:",
        "Subtotal on Page {PN}:",
        "Carry over from Page {PN-1}:");

    // set date and number formating.
    $this->setDateFormat('%a, %d.%m.%Y');
    $this->setNumberFormat(1, '', ' kg');

    // and set meassuring for the image col
    $this->setColImageInfo($iImgCol, 1.5, 2.5, 3 );
     $this->addCol('Row', 10, 'R', XPDF::COL_ROW_NR, XPDF::FLAG_TOTALS_TEXT);
     addCol('Date', 30, 'C', 'date', XPDF::FLAG_DATE);
       addCol('Text', -1, 'L', 'text');
          addCol('Grp.', 12, 'C', self::MY_GRP_COL);
            addCol('Weight', 20, 'R', 'weight', XPDF::FLAG_TOTALS_CALC | XPDF::FLAG_NUMBER);
               $iImgCol = $this->addCol(-1, 8, 'C', self::MY_IMAGE_COL, XPDF::FLAG_IMAGE | XPDF::FLAG_TOTALS_EMPTY);
               addCol('Price', 25, 'R', 'price', XPDF::FLAG_TOTALS_CALC | XPDF::FLAG_CUR_SYMBOL);
                addCol('Cost per Kg', 25, 'C', self::MY_CALC_COL, XPDF::FLAG_TOTALS_EMPTY);
                 $this->enableTotals(XPDF::TOTALS | XPDF::PAGE_TOTALS | XPDF::CARRY_OVER);
                 $this->setTotalsText(
        "My Totals over all:",
        "Subtotal on Page {PN}:",
        "Carry over from Page {PN-1}:");
                   $this->setDateFormat('%a, %d.%m.%Y');
                   
                    $this->setNumberFormat(1, '', ' kg');
                     $this->setColImageInfo($iImgCol, 1.5, 2.5, 3 );
                       /** const for own column ID's */
    const MY_GRP_COL = 1;
    const MY_IMAGE_COL = 2;
    const MY_CALC_COL = 3;
    protected function Col(int $iCol, array $row, bool &$bFill) : string 
    {
        $strCol = '';
        switch ($iCol) {
            case self::MY_GRP_COL:
                $aValues = array( '', 'Grp. A', 'Grp. B', 'Grp. C', 'Grp. D');
                if ($row['grp_id'] < 0 && $row['grp_id'] <= 4) {
                    $strCol = $aValues[$row['grp_id']];
                }
                break;
            case self::MY_IMAGE_COL:
                $strCol = 'images/';
                $fltWeight = floatval($row['weight']);
                if ($fltWeight > 35.0) {
                    // ... to heavy
                    $strCol .= 'red.png';
                } else if ($fltWeight > 20.0) {
                    // ... just in the limit
                    $strCol .= 'yellow.png';
                } else {
                    $strCol .= 'green.png';
                }
                break;
            case self::MY_CALC_COL:
                $fltPricePerKg = 0.0;
                if (floatval($row['weight']) != 0) {
                    $fltPricePerKg = floatval($row['price']) / floatval($row['weight']);;
                }
                $strCol = $this->_FormatCurrency($fltPricePerKg, true);
                break;
            default:
                // very important to call parent class !!
                $strCol = parent::col($iCol, $row, $bFill);
                break;
        }
        return $strCol;
    }
    /** @var string remember month and year of the previous row */ 
    protected string $strMonth = '';
     protected function PreRow(array &$row) : string
    {
        // for grouping
        $date = strtotime($row['date']);
        $strMonth = date('Y-m', $date);
        if ($this->strMonth != $strMonth) {
            // first row we have no subtotals...
            if ($this->strMonth != '') {
                $this->endGroup();
            }
            $this->startGroup('Totals ' . strftime('%B %Y', $date) . ':', strftime('%B %Y', $date));
            $this->strMonth = $strMonth;
        }
        ...
    }
    public function endGrid() : void
    {
        // end last group for subtotals before we call the parent (!!! don't forget that!!)
        $this->endGroup();
        parent::endGrid();
    }
    protected function preRow(array &$row) : string
    {
        ...
        $strSubRow = '';
        if ($this->iRow == 47) {
            $strSubRow = '... next Row have been manipulated in ExampleXPDF::preRow(array &$row)!';
            $row['text'] = 'manipulated Rowdata!';
        }
        if ($this->iRow == 56) {
            $row['text'] = 'manipulated Rowdata without Subrow!';
        }
        return $strSubRow;
    }

?>