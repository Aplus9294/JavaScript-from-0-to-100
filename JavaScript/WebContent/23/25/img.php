<?php
require_once 'src/jpgraph.php';     //导入Jpgraph类库
require_once 'src/jpgraph_line.php';     //导入Jpgraph类库的柱状图功能
$dataTmp = array(56, 78, 34, 65, 89, 24 ,67 ,88, 45, 68, 70, 50);     //设置统计数据
$data1 = array(0, 0, 0, 0, 0, 0 ,0 ,0, 0, 0, 0, 0);     //设置统计数据
$m = $_GET['m'];
for($i=0; $i<$m; $i++){
    $data1[$i] = $dataTmp[$i];
}
$graph = new Graph(500, 320);
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40, 30, 30, 70);
$graph->title->Set("图书销售走势表");
$lineplot1 = new LinePlot($data1);
$graph->Add($lineplot1);
$graph->xaxis->title->Set("月份");
$graph->yaxis->title->Set("book A销售金额（万元）");
$graph->title->SetFont(FF_SIMSUN, FS_BOLD);
$graph->yaxis->title->SetFont(FF_SIMSUN, FS_BOLD);
$graph->xaxis->title->SetFont(FF_SIMSUN, FS_BOLD);
$lineplot1->SetColor('red');
$lineplot1->SetLegend('book A');
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.4, 0.95, 'center', 'bottom');
$graph->Stroke();






