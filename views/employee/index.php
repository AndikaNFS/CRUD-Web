<?php

use yii\helpers\Html;

echo Html::tag('h1','Daftar Karyawan');

echo HTml::a('Create',['create'],['class'=>'btn btn-primary']);
echo '<table class="table table-bordered table-striped">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>NAMA</th>';
echo '<th>UMUR</th>';
echo '</tr>';
foreach ($employees as $employee) {
    echo '<tr>';
    echo '<td>' . $employee->id . '</td>';
    echo '<td>' . $employee->name . '</td>';
    echo '<td>' . $employee->age . '</td>';
    echo "<td>";
    echo Html::a('<i class="glyphicon glyphicon-pencil"></i>',
    ['employee/update','id'=>$employee->id]);

    echo Html::a('<i class="glyphicon glyphicon-trash"></i>',['employee/delete',
    'id'=>$employee->id], ['onclick'=>'return (confirm("Apakah data mau di hapus?") ? true : false);']);
    echo "</td>";
    echo '</tr>';
}
echo '</table>';