<div class="box side">


        <h3> Search | <a class="side" href="show_all.php">Show All</a>
        </h3>

        <i> Type part of the title / author name and then search</i>

        <hr />

        <form method="post" action="food_search.php"enctype="multipart/form-data">
                <input class="search" name="food" type="text" name="title" size="40" value="" required placeholder="Food..." />

                <input class="submit" type="submit" name="find_food"
                value="&#xf002;" />
        
        </form>

        
        
        <form method="post" action="place_search.php"enctype="multipart/form-data">
                <input class="search" type="text" name="place" size="40" value="" required placeholder="Place..." />

                <input class="submit" type="submit" name="find_place"
                value="&#xf002;" />
        
        </form>
        <hr />
        <i> Use the drop down menus search via time and rating</i>
        <hr/>
                
        <form method="post" action="time_search.php"enctype="multipart/form-data">
                <select name= "time" required>
                    <option value="" disabled selected>Time...</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Dessert">Dessert</option>
                </select>
                <input class="submit" type="submit" name="find_time"
                value="&#xf002;" />

        
        </form>
        
        <form method="post" action = "rating_search.php" enctype="multipart/form-data">
                <select class="half_width" name="amount">
                        <option value="exactly" > Exactly...</option>
                        <option value="more" selected> At least...</option>
                        <option value="less"> At most...</option>
                </select>
                <select class="half_width" name="stars">
                        <option value=1>&#9733;</option>
                        <option value=2>&#9733;&#9733;</option>
                        <option value=3 selected>&#9733;&#9733;&#9733;</option>
                        <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                        <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;
                        </option>
                </select>
                <input class="submit" type="submit" name="find_rating"
                value="&#xf002;" />
        </form>

</div>
<div class="box footer">
    CC Harveer Talwar 2023
</div>    <!-- / footer -->
    
</div>  <!-- / wrapper  -->
    
</body>        
