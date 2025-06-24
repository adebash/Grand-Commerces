<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grand-Commerces - Home</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="light">
  <header>
    <div class="header-main">
      <a href="#">
        <img src="./assets/images/grandcommerces.png" alt="logo" class="logo-img">
        <span class="logo-text">Grand-commerces</span>
      </a>
      <form class="searchBox" id="searchBox">
        <input type="search" name="searchItem" id="searchItem" placeholder="Searching for something else ?">
        <button type="submit">
          <span>Search</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
        </button>
      </form>
      <nav class="internal-links" id="internal-links">
        <!-- <button type="button" class="int-links" id="int-links">Pages</button> -->
        <div class="links-text" id="links-text">
          <li><a href="">Home</a></li>
          <li><a href="">Products</a></li>
          <li><a href="">Promotions</a></li>
          <li><a href="">Delivery</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Contact</a></li>
        </div>
      </nav>
      <div class="user-account" id="user-account">
        <button class="user-account-icon" id="user-account-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </button>
      </div>
      <div class="user-cart">
        <button class="user-cart-icon" id="user-cart-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
          </svg>
          <span class="cart-content-value" id="cart-content-value">0</span>
        </button>
      </div>
      <div class="user-language" id="user-language">
        <button class="current-language-value" id="current-language-value">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
          </svg>
          <span class="language-content-value" id="language-content-value">EN</span>
        </button> 
        <div class="language" id="language">
          <button class="language-value-en" id="language-value-en">
            <span class="en-content-value" id="en-content-value">EN</span>
          </button>
          <button class="language-value-fr" id="language-value-fr">
            <span class="fr-content-value" id="fr-content-value">FR</span>
          </button>
        </div>
      </div>
      <div class="theme-color" id="theme-color">
        <button class="current-theme" id="current-theme">
          <span class="current-theme-text" id="current-theme-text">Light</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
        </button>
        <div class="themes" id="themes">
          <button type="button" class="lightThemeOpt" id="lightThemeOpt">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
            <span class="light-theme-text" id="light-theme-text">Light</span>
          </button>
          <button type="button" class="darkThemeOpt" id="darkThemeOpt">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
            <span class="dark-theme-text" id="dark-theme-text">Dark</span>
          </button>
        </div>
      </div>
    </div>
    <div class="header-features"></div>
  </header>
</body>
<script src="./assets/js/app.js"></script>
</html>