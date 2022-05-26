<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Car Booking Confirm</title>
    </head>
    <body>
        <h2>Car Booking Confirmed</h2>
        <p>Name:
            <?php    echo $_POST['firstname'] . ' ' . $_POST['lastname'];?>
        </p>
        
        <p>Email:
            <?php    echo $_POST['Email'];?>
        </p>
        
        <p>Phone:
            <?php    echo $_POST['Phone'];?>
        </p>
        
        <p>Number of Passengers:
            <?php    echo $_POST['Passengers'];?>
        </p>
        
        
        <hr>
        
        <p>Contact Address</p><br>
        <p>Street Address:
            <?php    echo $_POST['contactstreetAddress'];?>
        </p>
        
        <p>Street Address line 2:
            <?php    echo $_POST['contactstreetAddresstwo'];?>
        </p>
        
        <p>City:
            <?php    echo $_POST['contactCity'];?>
        </p>
        
        <p>Region:
            <?php    echo $_POST['contactRegion'];?>
        </p>
        
        <p>Postal/Zip code:
            <?php    echo $_POST['contactPostal'];?>
        </p>
        
        <p>Country:
            <?php    echo $_POST['contactcountry'];?>
        </p>
        
        <hr>
        
        <p>Vehicle:
            <?php    echo $_POST['vechicle'];?>
        </p>
        
        <p>Pick Up Date:
            <?php    echo $_POST['date'];?>
        </p>
        
        <p>Pick Up Time:
            <?php    
                     echo $_POST['time'];
            ?>
        </p>
        
        <p>Airport Name:
            <?php    echo $_POST['airport_address'];?>
        </p>
        
        <p>Flight Number:
            <?php    echo $_POST['flight_number'];?>
        </p>
        
        <hr>
        
        <p>Pick Up Point</p><br>
        <p>Street Address:
        <?php echo $_POST['pointstreetAddress']; ?>
        </p>
        
        <p>Street Address Line 2:
            <?php echo $_POST['pointstreetAddresstwo']; ?>
        </p>
        
        <p>City:
            <?php echo $_POST['pointCity']; ?>
        </p>
        
        <p>Region:
            <?php echo $_POST['pointRegion']; ?>
        </p>
        
        <p>Postal/Zip code:
            <?php echo $_POST['pointPostal']; ?>
        </p>
        
        <p>Country:
            <?php echo $_POST['pointcountry']; ?>
        </p>
            
        <hr>
        
        <p>Destination</p><br>
        <p>Street Address:
            <?php echo $_POST['destitationstreetAddress']; ?>
        </p>
        
        <p>Street Address Line 2:
            <?php echo $_POST['destitationstreetAddresstwo']; ?>
        </p>
        
        <p>City:
            <?php echo $_POST['destitationCity']; ?>
        </p>
        
        <p>Region:
            <?php echo $_POST['destitationRegion']; ?>
        </p>
        
        <p>Postal/Zip code:
            <?php echo $_POST['destitationPostal']; ?>
        </p>
        
        <p>Country:
            <?php echo $_POST['destinationcountry']; ?>
        </p>
        
        
        
        <p>Notes:</p>
        <?php echo htmlspecialchars($_POST['comments']); ?>

    
    </body>

</html>





