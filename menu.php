<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container">

    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php" aria-current="page">Home </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userregistration" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User Registration
          </a>
          <div class="dropdown-menu" aria-labelledby="userregistration">
            <a class="dropdown-item" href="registeruser.php">Register User</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userlist" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User List
          </a>
          <div class="dropdown-menu" aria-labelledby="userlist">
            <a class="dropdown-item" href="adminlist.php">Admin List</a>
            <a class="dropdown-item" href="patronlist.php">Patron List</a>
            <a class="dropdown-item" href="regularlist.php">Regular List</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="catalogue" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catalogue
          </a>
          <div class="dropdown-menu" aria-labelledby="catalogue">
            <a class="dropdown-item" href="addbook.php">Add Books</a>
            <a class="dropdown-item" href="books.php">Books</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="OPAC" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            OPAC
          </a>
          <div class="dropdown-menu" aria-labelledby="OPAC">
            <a class="dropdown-item" href="books.php">Search Book</a>
            <a class="dropdown-item" href="feedback.php">Feedback</a>
            <a class="dropdown-item" href="search_results.php">Results</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="Circulation" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Circulation
          </a>
          <div class="dropdown-menu" aria-labelledby="Circulation">
            <a class="dropdown-item" href="checkin.php">Checkin</a>
            <a class="dropdown-item" href="checkoutbook.php">Checkout</a>
            <a class="dropdown-item" href="overdue.php">Overdue</a>
          </div>
        </li>

      </ul>
    </div>
    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="login.php" aria-current="page">Login </a>
      </li>
    </ul>
  </div>
</nav>