<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">
    <div class="row m-3">


        <aside class="col-sm-4 m-3">

            <?php Navigation(); ?>

            <?php
            $name = $email = "";
            ?>

        </aside>
        <!--SIDEBAR-->
    </div>
    <article class="main-content col-sm-8">


        <form action="index.php" method="post" class="single-form">
            <div>

                <label>
                    name
                    <input type="text" name="name" value="<?php echo $name; ?>">
                </label>
                <br>
                <!--                <label for="email">Email</label>-->
                <!--                <input type="email" id="email">-->
                <br>
                <label for="password">Password</label>
                <input type="password" id="password">
                <br>
                <input type="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['name'])) {
            echo $_POST['name'];
        }

        ?>


    </article>
    <!--MAIN CONTENT-->



