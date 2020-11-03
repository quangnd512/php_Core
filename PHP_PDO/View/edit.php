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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                </ul>
                </form>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Edit User</h1>
            <form action="../Action.php" method="POST">
            <?php
            require_once("../Book.php");
            $objBook = new Book;
            $books = $objBook->getAllBooks();
            foreach ($books as $book) {
                if ($book['id']==$_GET['id']) {
            ?>
                <div class="form-group">
                <input type="hidden" class="form-control" id="name" name="Iid" value="<?php echo $book['id']; ?>"><br>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="Iname" value="<?php echo $book['name']; ?>"><br>
                    <label for="type">Type</label>
                    <select id="type" name="Itype">
                        <?php $array = array("Tieu thuyet","Van hoc","Hai huoc","Xa hoi");
                        foreach ($array as $value) {
                            ?><option value="<?php echo $value; ?>" <?php if ($book['type']=="$value") {
                                echo "selected='selected'";
                            } ?>><?php echo $value; ?></option>";
                        <?php } ?>
                    </select><br>
                    <label for="pages">Pages</label>
                    <input type="number" class="form-control" id="pages" name="Ipages"  value="<?php echo $book['pages']; ?>"><br>
                    <label for="price">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="Iprice" value="<?php echo $book['price']; ?>"><br>
                    <label for="auther">Auther</label>
                    <input type="text" class="form-control" id="auther" name="Iauther" value="<?php echo $book['auther']; ?>"><br>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" value="edit">Submit</button>
            <?php } } ?>
            </form>
        </div>
    </main>
      
    <footer class="footer mt-auto py-3">
    </footer>

    
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>