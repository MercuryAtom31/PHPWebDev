<?php
/*
 * This code is a PHP script that defines a function myToString($array)
 * and then demonstrates its usage with various arrays.
 */
function myToString($array)
{
    /*
     * It uses implode(", ", $array) to concatenate the elements of the array
     *  into a string, separated by commas.
     */
    $strTmp = implode(", ", $array);
    $strTmp .= ']'; # It appends ']' to the end of the string.
    return '[ ' . $strTmp;//Finally, it returns the formatted string enclosed in square brackets.
}
?>
<!--#########PROBLEMS###########-->
<?php//################################?>
<hr>
<?php
echo "<h3>array_walk()</h3>";
# Creates an array $a using range(0, 10).
$a = range(0, 10); # array an array of elements from start to end, inclusive.
# Calls myToString function to convert the array to a formatted string.
echo myToString($a) . '<br>';

# Traversing an array of integer values ($a), checking and printing whether the element is even or odd.
foreach($a as $number) {
    if ($number % 2 === 0){
        echo "The number $number is Even" . "<br>";
    } else {
        echo "The number $number is Odd" . "<br>";
    }
}
?>

<?php//################################?>
<hr>
<?php
echo "<h3>array_reduce()</h3>";
$a = array(5, 20, 10, 15);
echo myToString($a) . '<br>';
# Declaring a variable which is going to hold the recursive sum of each integer element of the array (a$).
$sum= null;
# Traversing the array (a$) and adding each integer element into the $sum variable.
foreach($a as $number) {
    $sum += $number;
}
echo "The recursive SUM is: $sum"; # Printing the recursive sum.
?>

<?php//################################?>
<hr>
<?php
echo "<h3>array_reduce()</h3>";
$z = array(1, 2, 3, 4, 5);
echo myToString($z) . '<br>';

/*
 *  Declaring a variable which is going to hold the recursive product of each integer element of the array (a$).
 *
 * In a product calculation, we need to start with the multiplicative identity, which is 1.
 * When we multiply any number by 1, it doesn't change the value of that number.
 * Therefore, we initialize the $product variable to 1 to correctly accumulate
 * the product of the array elements.
 */
$product = 1;
# Traversing the array (a$) and multiplying each integer element into the $product variable.
foreach($z as $number) {
    $product *= $number;
}
echo "The recursive PRODUCT is: $product"; # Printing the recursive product.
?>


<?php//################################?>
<hr>
<?php
echo "<h3>Set Operations</h3>";
$a = [1, 2, 3, 4, 5];
echo 'A=' . myToString($a) . '<br>';
$b = [4, 5, 6, 7, 8];
echo 'B=' . myToString($b) . '<br>';

//Merging elements of arrays $a and $b into $c using the array_merge() function.
$arrayContainingElementsOfArraysAnB = array_merge($a, $b);
//Printing the merge elements using the myToString() function.
echo 'A+B: '.myToString($arrayContainingElementsOfArraysAnB) . '<br>';
//Creating a new array containing elements only present in array $a.
$arrayContainingOnlyElementsOfArrayA = array_diff($a, $b);
echo 'B-A: '.myToString($arrayContainingOnlyElementsOfArrayA) . '<br>';

//Creating a new array solely containing elements present in both $a and $b arrays.
$arrayIntersection = array_intersect($a, $b);
echo 'Intersection: '.myToString($arrayIntersection) . '<br>';
/*
 * Since array_unique() function does not take two arrays as parameters (array_unique($a, $b);),
 * we are going to plug as a parameter the previously created array "$arrayContainingElementsOfArraysAnB"
 * which merges all elements of arrays $a and $b, ** INCLUDING DUPLICATES **.
 */
$arrayOfUniqueElements = array_unique($arrayContainingElementsOfArraysAnB);
echo 'A+A unique: '.myToString($arrayOfUniqueElements) . '<br>';
?>