<!---->Write a (failing) test to assert that `student->addBonusPoints(int)` returns a boolean value

<?php


function check($int) {
    if ($int == 3) {
        return true;
    } else {
        return false;
    }
}
if (check(3)) echo "Returned true!";