<?php 
  include("connect.php"); 
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

  /* navbar */
.navbar {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: var(--padding-inline-section);
  padding-inline: 75px;
  background-color: whitesmoke;
}

.nav-links {
  flex-basis: 730px;
}

.nav-links ul {
  display: flex;
  justify-content: end;
  align-items: center;
  gap: 35px;
  cursor: pointer;
}

.hover-link {
  color: var(--primary-text-color);
  transition: all 0.3s ease;
}

.hover-link:hover {
  color: var(--accent-color);
}
.nav-toggle {
  display: none;
}

  </style>
</head>
<body>
    <!-- nav bar -->
<nav class="navbar">
      <div class="nav-logo">
        <a href="#"><img src="./assets/asset 0.jpeg"  /></a>
      </div>

      <div class="nav-links" id="nav-links">
        <ul>
          <!-- Your navigation links here -->
          <li>
            <a href="./index.php" class="hover-link" style="color: #f56f42">Home </a>
          </li>
          <li>
            <a href="./gallery.php" class="hover-link" 
              >Gallary
            </a>
          </li>
          <li>
            <a href="./packages.php" class="hover-link" 
              >Packages
            </a>
          </li>
          <li>
            <a href="./booknow.php" class="hover-link" 
              >Book Now
            </a>
          </li>
          <li>
            <a href="./about.php" class="hover-link" 
              >About us
            </a>
          </li>
          <li>
            <a href="./contact.php" class="hover-link" 
              >Contact us
            </a>
          </li>
          <!-- <li>
            <a
              href="./login.php"
              class="hover-link primary-button"
              
              >Login
            </a>
          </li> -->
        </ul>
      </div>

      <div class="nav-toggle">
        <a
          class="fas fa-bars toggle-icon"
          id="nav-toggle"
          onclick="toggleMenu()"
        ></a>
      </div>
    </nav>
</body>
</html>

