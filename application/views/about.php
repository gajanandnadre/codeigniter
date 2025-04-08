<h1>
    this is aboout file
</h1>
      <?php
    echo "<br>";
        // print_r ($names);

        foreach($names as $name){
            ?>
            <ul>
                <li>
                   <h1> <?php echo $name ?></h1>
                </li>
            </ul>
            <?php
        //  <!-- echo   $name ."<br>"; -->
        }

        ?>

