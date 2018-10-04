<?php
declare(strict_types=1);
namespace knn\app;
require __DIR__ . '/../vendor/autoload.php';
use Phpml\Classification\KNearestNeighbors;

$file = fopen("C:\\xampp\htdocs\knn\data\datasetruspini.txt","rb");
//$test = fopen("D:\kuliah\ML\atugas\datatesruspini.txt","rb");
$i    = 0;
$j	  = 0;
?>
<html>
<body>
	<table>
		<tr>
			<?php
			$status = 0;
			$baris  = 1;
				
				while(!feof($file)){
					$line[$baris] = fgets($file);
					$baris++;
					
				}			
				$jbaris = count($line);
				for ($i=0; $i < $jbaris; $i++) { 
					$sample[$i] = explode(',', $line[$i+1]);
				}
			
			$jml_pisah_baris  = count($sample);
			$jml_pisah_kolom  = count($sample[1]);	
			
			for ($a=0; $a <$jml_pisah_baris ; $a++) { 
					for ($b=0; $b < $jml_pisah_kolom-1; $b++) { 
						$data[$a][$b] = $sample[$a][$b];
						//echo $data[$a][$b];
				}
				//echo " <br>";
			}
			 for ($a=0; $a <$jml_pisah_baris ; $a++) { 
					
						$label[$a] = $sample[$a][2];
				// 		echo $label[$a];
				// echo " <br>";
			}
			//print_r($samples);
			fclose($file);
			
			?>
		</tr>
	</table>
</body>
</html>
<?php
// $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
// $labels = ['a', 'a', 'a', 'b', 'b', 'b'];

// $classifier = new KNearestNeighbors();
// $classifier->train($samples, $labels);

// echo $classifier->predict([3, 2]);

?>