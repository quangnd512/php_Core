<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>List of User</title>
   
  </head>
  <body class="d-flex flex-column h-100">
    
    <div class="container pt-4 pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">HTML CRUD Template</a>
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
        <?php 
            require_once("../Book.php");
            $objBook = new Book;
            $books = $objBook->getAllBooks();
            foreach ($books as $book) {
                if ($book['id']==$_GET['id']) {
        ?>
            <h1>View User Detail</h1>
            <p>Name: <?php echo $book['name']; ?></p>
            <p>Type: <?php echo $book['type']; ?></p>
            <p>Pages: <?php echo $book['pages']; ?></p>
            <p>Price: <?php echo $book['price']; ?></p>
            <p>Auther: <?php echo $book['auther']; ?></p>
            <a href="edit.php?id=<?php echo $book['id'] ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
            <button class="btn btn-sm">Delete</button>
        <?php
            } }
        ?>
        </div>
    </main>
      
    <footer class="footer mt-auto py-3">
    </footer>

    
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>