<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : 'collapsed' ?>" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'managebooks.php' ? '' : 'collapsed' ?>" href="managebooks.php">
          <i class="bi bi-book"></i>
          <span>Manage Books</span>
        </a>
      </li><!-- End Manage Books Nav -->

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'managefines.php' ? '' : 'collapsed' ?>" href="managefines.php">
          <i class="bi bi-people"></i>
          <span>Manage Fines</span>
        </a>
      </li><!-- End Manage Fines Nav -->

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'issuebooks.php' ? '' : 'collapsed' ?>" href="issuebooks.php">
          <i class="bi bi-book-fill"></i>
          <span>Issue Books</span>
        </a>
      </li><!-- End Issue Books Nav -->

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'viewissuedbooks.php' ? '' : 'collapsed' ?>" href="viewissuedbooks.php">
          <i class="bi bi-bookmark-check"></i>
          <span>View Issued Books</span>
        </a>
      </li><!-- End View Issued Books Nav -->

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'managestudents.php' ? '' : 'collapsed' ?>" href="managestudents.php">
          <i class="bi bi-people"></i>
          <span>Manage Students</span>
        </a>
      </li><!-- End Manage Students Nav -->


      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'manageteachers.php' ? '' : 'collapsed' ?>" href="manageteachers.php">
          <i class="bi bi-people"></i>
          <span>Manage Teachers</span>
        </a>
      </li><!-- End Manage Teachers Nav -->

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'manageusers.php' ? '' : 'collapsed' ?>" href="manageusers.php">
          <i class="bi bi-people"></i>
          <span>Manage Users</span>
        </a>
      </li><!-- End Manage Users Nav -->

      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'bookrequests.php' ? '' : 'collapsed' ?>" href="bookrequests.php">
          <i class="bi bi-heart"></i>
          <span>Book Requests</span>
        </a>
      </li><!-- End Book Requests Nav -->
    </ul>

  </aside>