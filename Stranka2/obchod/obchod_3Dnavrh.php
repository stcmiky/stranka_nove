<?php
      // Include header
      include('../hlavicka/header.php');
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Store</title>
    
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="../obchod/obchod_3Dmodely.php">3D Modely</a></li>
            <li><a href="../obchod/obchod_3Dnavrh.php">3D Návrhy</a></li>
        </ul>
    </div>
    
    <div id="content">
        <?php
        // Check the selected category
        $category = isset($_GET['category']) ? $_GET['category'] : 'models';
        
        // Sample items (Replace with your own data)
        $items = array(
            array(
                'title' => 'Assassin creed',
                'price' => '$10',
                'image' => '../obrazky/3DD1.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Skyrim',
                'price' => '$15',
                'image' => '../obrazky/3DD2.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Honda',
                'price' => '$10',
                'image' => '../obrazky/3DD3.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'God of War',
                'price' => '$15',
                'image' => '../obrazky/3DD4.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'SpongeBob',
                'price' => '$10',
                'image' => '../obrazky/3DD5.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Powerwolf',
                'price' => '$15',
                'image' => '../obrazky/3DD6.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Pojka typu T',
                'price' => '$10',
                'image' => '../obrazky/3DD7.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Spojka typu L',
                'price' => '$15',
                'image' => '../obrazky/3DD8.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Spojka 702',
                'price' => '$10',
                'image' => '../obrazky/3DD9.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Spojka 239',
                'price' => '$15',
                'image' => '../obrazky/3DD10.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Spojka 251',
                'price' => '$10',
                'image' => '../obrazky/3DD11.jpg',
                'category' => 'models'
            ),
            array(
                'title' => 'Vlastné',
                'price' => '...',
                'image' => '../obrazky/upload.jpg',
                'category' => 'models'
            ),
            // Add more items...
        );
        
        // Filter items based on the selected category
        $filteredItems = array_filter($items, function ($item) use ($category) {
            return $item['category'] == $category;
        });
        ?>
        
        <div class="item-container">
            <?php foreach ($filteredItems as $item): ?>
                <div class="item">
                    <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>">
                    <h3><?= $item['title']; ?></h3>
                    <button class="price-button"><?= $item['price']; ?></button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

<?php
      // Include footer
      include('../paticka/footer.php');
    ?>

<style>
        /* CSS styles for the layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        #navbar {
            background-color: #6c757d;
            color: #fff;
            padding: 10px;
            width: 200px; /* Set a fixed width for the gray rectangle */
            border-radius: 10px; /* Add rounded corners */
            margin-bottom: 10px;
            margin-top: 10px;
            margin-left: 50px;
        }

        #navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center; /* Center the links vertically */
            justify-content: space-around; /* Add equal space around the links */
            margin-top:5px;
        }


        
        #navbar ul li {
            margin-bottom: 10px; /* Add some bottom margin for spacing */
        }

        #navbar ul li a {
            color: #f5bd1f;
            text-decoration: none;
            padding: 5px;
            border-radius: 5px;
            transition: color 0.3s ease; /* Add transition for smooth effect */
        }   

        #navbar ul li a:hover {
            color: #5D2689; /* Set the desired color for the letters on hover */
        }

        
        #content {
            padding: 20px;
            text-align: center; /* Align items in the center */
        }
        
        .item {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    width: 200px;
    height: 200px;
    margin: 5px;
    padding: 10px;
    background-color: #6c757d;
    border-radius: 10px;
}
        
        
        
        /* Create a grid layout */
        .item-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 items per row */
            gap: 10px; /* Adjust the gap between rows and columns */
            justify-items: center; /* Center items horizontally in the grid */
        }

        .item img {
            max-width: 70%;
            max-height: 70%;
            object-fit: middle;
            margin-top: 10px;
        }
        
        .price-button {
    display: inline-block;
    padding: 8px 16px;
    background: linear-gradient(to right, #5D2689, #4f2075, #421b61);
    color: #f5bd1f;
    border: 1px solid #5D2689;
    border-radius: 4px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.price-button:hover {
    background: linear-gradient(to right, #FFE863, #FFD93D, #F5BD1F);
    color: #5D2689;
}
    
   </style>