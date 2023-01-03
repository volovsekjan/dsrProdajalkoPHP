<?php
    
    include_once 'config.php';

    $sql = "DELETE FROM uporabnik WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        header("Location: prijava.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

<?php
// PHP program to pop an alert
// message box on the screen
  
// Display the alert box 
echo '<script>alert("Uspešno ste izbrisali vaš račun!")</script>';
  
?>