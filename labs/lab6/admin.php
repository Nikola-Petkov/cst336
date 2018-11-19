<?php
    session_start();
    include 'dbConnection.php';
    $conn = getDatabaseConnection("ottermart");
    
    if (!isset($_SESSION['adminName']))
    {
        header("Location:login.php");
    }

    function displayAllProducts() {
        global $conn;
        $sql = "SELECT * FROM om_product ORDER BY productId";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <body>
    
    <form action="addProduct.php">
        <input type="submit" class = 'btn btn-secondary' id = "beginning" name="addProduct" value="Add Product"/>
    </form>
    
    <form action="logout.php">
        <input type="submit" class = 'btn btn-secondary' id = "beginning" value="Logout"/>
    </form>
    
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete the product?");
        }
    </script>
    
    <?php
        $records = displayAllProducts();
        echo "<table class='table table-hover'>";
        echo "<thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>Update</th>
                    <th scope='col'>Remove</th>
                </tr>
            </thead>";
        
        echo "<tbody>";
        foreach($records as $record) {
            echo "<tr>";
            echo "<td>" . $record['productId'] . "</td>";
            echo "<td>" . $record['productName'] . "</td>";
            echo "<td>" . $record['productDescription'] . "</td>";
            echo "<td>€" . $record['price'] . "</td>";
            echo "<td><a class='btn btn-primary' href='updateProduct.php?productId=".$record['productId']."'>Update</a></td>";
            
            echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
            echo "<input type='hidden' name='productId' value=" . $record['productId'] . " />";
            echo "<td><input type='submit' class = 'btn btn-danger' value='Remove'></td>";
            echo "</form></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </body>
</html>