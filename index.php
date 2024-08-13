<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Mall</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CDNjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="icon" href="./images/cart-shopping-solid.svg">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- ! 開場動畫 -->
    <div class="animated">

    </div>

    <!-- 固定圖片 -->
    <div class="fix-img"></div>
    <header>
        <nav>
            <!-- 裡面有 logo 跟 圖片 -->
            <div class="nav-left">
                <!-- <a class="nav-logo" href="#">Roger</a> -->
                <!-- 未來用js功能讓他跑回首頁 -->
                <img id="index-img" src="./images/logo-Photoroom.png" alt="">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="./Login.php">Login</a></li>
                <li><a href="./Product.php">Product</a></li>
                <li><a href="./Content.php">Content</a></li>
                <li><a href="./Story.php">Story</a></li>
                <li><a href="./Cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <!-- 第二層放照片 -->
    <section>
        <div id="display">
            <div id="display-model">
                <img src="./images/model4-unsplash.jpg" alt="">
            </div>
        </div>
    </section>


    <section>
        <div id="category">
            <div id="photo"></div>
        </div>
    </section>




    <footer>
        <!-- 個人簡介 -->
        <div>
            <div><i></i></div>
            <div><i></i></div>
            <div><i></i></div>
            <div><i></i></div>
        </div>
    </footer>

    <!-- 移動是icon -->
    <div id="icon"></div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
</script>
<script src="./app.js"></script>

</html>