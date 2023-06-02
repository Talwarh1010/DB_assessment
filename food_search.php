<?php include "topbit.php";

if(isset($_POST['find_food']))
{
$food=test_input(mysqli_real_escape_string($dbconnect,$_POST["food"]));

$find_sql = "SELECT * FROM `food_reviews` WHERE `Food` LIKE '%$food%' ORDER BY `Food` ASC";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);
$count = mysqli_num_rows($find_query);
?>


<div class="box main">
        <h2>Food search</h2>
<?php
if ($count < 1)
{
?>
<div class="error">
    Sorry! There are no results that match your search.
    Please use the search box in the sidebar to try again.

</div>

<?php
} 
else {
    do {
    ?>
    <div class="results">
                <p>Food: <span class = "sub_heading"><?php echo $find_rs['Food']; ?></span>
                </p>

                <p>Place: <span class = "sub_heading"><?php echo $find_rs['Place']; ?></span>
                </p>

                <p>Time: <span class = "sub_heading"><?php echo $find_rs['Time']; ?></span>
                </p>

                <p>Rating: <span class = "sub_heading">
                    <?php
                    for ($x=0; $x < $find_rs['Rating']; $x++)
                    {
                        echo "&#9733";
                    }
                    ?>
                </span></php>
                <p><span class="sub_heading">Review / Response</span></p>

                <p>
                    <?php echo $find_rs['Review']; ?>
                </p>
        </div>
        
        <br/>
    <?php
            }
            while ($find_rs = mysqli_fetch_assoc($find_query));
        }

        }
        ?>
</div> <!-- / main -->

<?php
include "bottombit.php";
?>