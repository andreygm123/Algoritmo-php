<?php
echo "Ingresa la cantidad de estudiantes: ";
$cantidadEstudiantes = (int)trim(fgets(STDIN));

$notas = [];

for ($i = 0; $i < $cantidadEstudiantes; $i++) {
    echo "Ingresa la nota del estudiante " . ($i + 1) . ": ";
    $notas[] = (float)trim(fgets(STDIN));
}

$notaMayor = max($notas);
$notaMenor = min($notas);
$promedio = array_sum($notas) / count($notas);

echo "La nota mayor es: $notaMayor\n";
echo "La nota menor es: $notaMenor\n";
echo "El promedio de las notas es: $promedio\n";
?>
