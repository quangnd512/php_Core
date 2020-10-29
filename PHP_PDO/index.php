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
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="View/create.php">Create</a>
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
            <h1>List of User</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">IDs</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Pages</th>
                    <th scope="col">Price</th>
                    <th scope="col">Auther</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once("Book.php");
                        $objBook = new Book;
                        $books = $objBook->getAllBooks();
                        foreach ($books as $book) {
                            echo "<tr>";
                                echo "<th scope='row'>".$book['id']."</th>";
                                echo "<td>".$book['name']."</td>";
                                echo "<td>".$book['type']."</td>";
                                echo "<td>".$book['pages']."</td>";
                                echo "<td>".$book['price']."</td>";
                                echo "<td>".$book['auther']."</td>";
                    ?>
                                <td>
                                    <a href="View/view.php"><button class="btn btn-primary btn-sm">View</button></a>
                                    <a href="View/edit.php"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                                    <button class="btn btn-sm">Delete</button>
                                </td>
                    <?php
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
      
    <footer class="footer mt-auto py-3">
    </footer>

    
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>