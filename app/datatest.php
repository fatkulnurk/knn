<?php
declare(strict_types=1);
namespace knn\app;
require __DIR__ . '/../vendor/autoload.php';
use Phpml\Classification\KNearestNeighbors;
$test = fopen("C:\\xampp\htdocs\knn\data\datatesruspini.txt","rb");
$i    = 0;
$j	  = 0;
			$status = 0;
			$baristest  = 1;
				
				while(!feof($test)){
					$linetest[$baristest] = fgets($test);
					$baristest++;
					
				}		
				//echo $baristest;	
				$jbaristest = count($linetest);
				for ($i=0; $i < $jbaristest; $i++) { 
					$datatest[$i] = explode(',', $linetest[$i+1]);
				}
				//print_r($line);
				//echo $jbaristest;
			// echo $jbaristest;
			$jml_pisah_baristest  = count($datatest);
			$jml_pisah_kolomtest  = count($datatest[1]);
			//echo $jml_pisah_baristest;
			
			 for ($a=0; $a <$jml_pisah_baristest ; $a++) { 
					for ($b=0; $b < $jml_pisah_kolomtest; $b++) { 
						$arraydatatest[$a][$b] = $datatest[$a][$b];
			//			echo $arraydatatest[$a][$b];
				}
				//echo " <br>";
			}
			for ($a=0; $a <$jml_pisah_baristest ; $a++) { 
						$labelbenar[$a] = $arraydatatest[$a][2];
				// 		echo $label[$a];
				// echo " <br>";
			}
			//print_r($datatest);
			fclose($test);
			?>