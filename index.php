<?php
//echo'123';
require_once('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
require_once('/home/EDRO.SetOfTools/System/0.Functions/1.RequestsFilter.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/0.KIIM.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/1.objKIIM.activation.php');

require_once('/home/EDRO.SetOfTools/System/3.Buffer/1.EDRO_Buffering.php');

$objEDRO	=new Event($objKIIM);
FileRead::_GetDesignHTML($objKIIM, $objEDRO->arrDesign['strTemplate'], $objEDRO);
//$objEDRO=new EDRO($objKIIM);


require_once('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/3.HTML_CloseInterface.php');

?>
