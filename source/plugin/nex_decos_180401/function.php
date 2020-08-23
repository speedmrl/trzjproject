<?php


function exportExcel($title=array(), $data=array(), $fileName='', $savePath='./', $isDown=false){  
    include('source/plugin/nex_decos_180401/PHPExcel/Classes/PHPExcel.php');  
    $obj = new PHPExcel();  
    $cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');  
      
    $obj->getActiveSheet(0)->setTitle('sheet');
    $_row = 1;   
    if($title){  
        $_cnt = count($title);  
        $obj->getActiveSheet(0)->mergeCells('A'.$_row.':'.$cellName[$_cnt-1].$_row);
        $obj->setActiveSheetIndex(0)->setCellValue('A'.$_row, 'time：'.date('Y-m-d H:i:s'));   
        $_row++;  
        $i = 0;  
        foreach($title AS $v){
            $obj->setActiveSheetIndex(0)->setCellValue($cellName[$i].$_row, $v);  
			$obj->getActiveSheet()->getStyle($cellName[$i].$_row)->applyFromArray(
				array('font' => array ('bold' => true),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER))
			); 
			$i++; 
        }  
        $_row++;
    }  
    if($data){  
        $i = 0;  
        foreach($data AS $_v){  
            $j = 0;  
            foreach($_v AS $_cell){  
                $obj->getActiveSheet(0)->setCellValue($cellName[$j] . ($i+$_row), $_cell);  
                $j++;  
            }  
            $i++;  
        }  
    }  
    if(!$fileName){  
        $fileName = uniqid(time(),true);  
    }  
    $objWrite = PHPExcel_IOFactory::createWriter($obj, 'Excel2007');  
  
    if($isDown){   
        header('pragma:public');  
        header("Content-Disposition:attachment;filename=$fileName.xls");  
        $objWrite->save('php://output');exit;  
    }  
    $_fileName = iconv("utf-8", "gb2312", $fileName);
    $_savePath = $savePath.$_fileName.'.xlsx';  
    $objWrite->save($_savePath);  
    return $savePath.$fileName.'.xlsx';  
}
function gbkutf($data){
	$data1 = diconv($data,'utf-8','gbk');
	$data0 = diconv($data1,'gbk','utf-8');
	if($data0 == $data){$tmpstr = $data1;}else{$tmpstr = $data;}
	return diconv($tmpstr,'gbk','utf-8');
}
function _getwhere($type){
	$where = 'where type='.$type;
	if($_GET['area']){
		$where .= " AND area = '".daddslashes(dhtmlspecialchars($_GET['area']))."'";
	}
	if($_GET['mintime']){
		$where .= " AND time > '".intval(strtotime($_GET['mintime']))."'";
	}
	if($_GET['maxtime']){
		$where .= " AND time < '".intval(strtotime($_GET['maxtime']))."'";
	}
	return $where;
}