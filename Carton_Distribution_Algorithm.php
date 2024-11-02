<?php
$total_pieces = 10;
$pieces_per_carton = 6;
$full_cartons = intdiv($total_pieces, $pieces_per_carton);

$remaining_pieces = $total_pieces % $pieces_per_carton;

echo "Full Cartons: " . $full_cartons . "\n";
echo "Remaining Pieces: " . $remaining_pieces . "\n";

?>
