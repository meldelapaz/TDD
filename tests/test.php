<?php


public function getGPA() {
    $total   = array_sum( $this->grades );
    $count   = count( $this->grades );
    $average = $total / $count;
    $gpa     = ( $average / 20 ) - 1;

    return $gpa;
}