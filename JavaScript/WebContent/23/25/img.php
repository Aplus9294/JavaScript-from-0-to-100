<?php
require_once 'src/jpgraph.php';     //����Jpgraph���
require_once 'src/jpgraph_line.php';     //����Jpgraph������״ͼ����
$dataTmp = array(56, 78, 34, 65, 89, 24 ,67 ,88, 45, 68, 70, 50);     //����ͳ������
$data1 = array(0, 0, 0, 0, 0, 0 ,0 ,0, 0, 0, 0, 0);     //����ͳ������
$m = $_GET['m'];
for($i=0; $i<$m; $i++){
    $data1[$i] = $dataTmp[$i];
}
$graph = new Graph(500, 320);
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40, 30, 30, 70);
$graph->title->Set("ͼ���������Ʊ�");
$lineplot1 = new LinePlot($data1);
$graph->Add($lineplot1);
$graph->xaxis->title->Set("�·�");
$graph->yaxis->title->Set("book A���۽���Ԫ��");
$graph->title->SetFont(FF_SIMSUN, FS_BOLD);
$graph->yaxis->title->SetFont(FF_SIMSUN, FS_BOLD);
$graph->xaxis->title->SetFont(FF_SIMSUN, FS_BOLD);
$lineplot1->SetColor('red');
$lineplot1->SetLegend('book A');
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.4, 0.95, 'center', 'bottom');
$graph->Stroke();






