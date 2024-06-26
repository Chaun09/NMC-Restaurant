<?php require_once 'controller.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/forgetpass.css">
      
        <title>Forgot Password Page | NMC Restaurant</title>
    </head>
    <body>
        <?php include("visitor-header.php");?>
        
        <div class="container-register">
            <section class="registration-form">
                <?php include("backbtn.php");?>
                <p class="registration-title">Forgot your password? No worries!</p>
                    <form action="#" method="POST" id="signup">
                        <div class="details">
                            <label for="email">
                                <span>Enter your registered email:</span>
                            </label>
                            <input type="email" name="stud_email" value="<?php echo $stud_email; ?>" id="email" required>
                        </div>
                        <div class="signup-button">
                            <input type="submit" value="recover account" name="forgot-password">
                        </div>
                    </form>
            </section>
        </div>

        <?php include("visitor-footer.php");?>
    </body>
</html>







