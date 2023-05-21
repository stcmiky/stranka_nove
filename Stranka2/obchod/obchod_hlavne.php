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
                'title' => 'Item 1',
                'price' => '$10',
                'image' => '../obrazky/3DP1.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 2',
                'price' => '$15',
                'image' => '../obrazky/3DP2.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 1',
                'price' => '$10',
                'image' => '../obrazky/3DP3.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 2',
                'price' => '$15',
                'image' => '../obrazky/3DP4.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 1',
                'price' => '$10',
                'image' => '../obrazky/3DP5.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 2',
                'price' => '$15',
                'image' => '../obrazky/3DP6.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 1',
                'price' => '$10',
                'image' => '../obrazky/3DP7.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 2',
                'price' => '$15',
                'image' => '../obrazky/3DP8.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 1',
                'price' => '$10',
                'image' => '../obrazky/3DP9.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 2',
                'price' => '$15',
                'image' => '../obrazky/3DP10.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 1',
                'price' => '$10',
                'image' => '../obrazky/3DP11.png',
                'category' => 'models'
            ),
            array(
                'title' => 'Item 2',
                'price' => '$15',
                'image' => '../obrazky/3DP12.png',
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
                    <h3><?= $item['title']; ?></h3>
                    <p>Price: <?= $item['price']; ?></p>
                    <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>">
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
            background-color: #333;
            color: #fff;
            padding: 10px;
            width: 200px; /* Set a fixed width for the gray rectangle */
            border-radius: 10px; /* Add rounded corners */
            margin-bottom: 10px;
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
            color: #fff;
            text-decoration: none;
            padding: 5px;
            display: block; /* Make the links display as blocks */
            border-radius: 5px; /* Add rounded corners to the links */
        }

        
        #content {
            padding: 20px;
            text-align: center; /* Align items in the center */
        }
        
        .item {
            display: inline-block;
            width: 200px;
            height: 200px;
            margin: 5px; /* Adjust the gap between items */
            padding: 10px;
            border: 1px solid #ccc;
        }
        
        .item img {
            width: 100%;
            height: auto;
        }
        
        /* Create a grid layout */
        .item-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 items per row */
            gap: 10px; /* Adjust the gap between rows and columns */
            justify-items: center; /* Center items horizontally in the grid */
        }

        .item img {
        max-width: 50%;
        max-height: 50%;
        object-fit: contain;
        }
    </style>