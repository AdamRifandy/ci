<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>MalasNgoding | Membuat Template sederhana codeigniter</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url()
?>assets/css/style.css"
    />
  </head>
  <body>
    <div id="wrapper">
      <header>
        <hgroup>
          <h1>MalasNgoding.com</h1>
          <h3>Membuat template sederhana codeigniter</h3>
        </hgroup>
        <nav>
          <ul>
            <li>
              <a
                href="<?php echo base_url().'index.php/web'
?>"
                >Home</a
              >
            </li>
            <li>
              <a
                href="<?php echo
base_url().'index.php/web/about' ?>"
                >About</a
              >
            </li>
          </ul>
        </nav>
        <div class="clear"></div>
      </header>
      <section>
        <h1><?php echo $judul ?></h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum
          dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
          occaecat cupidatat non proident, sunt in culpa qui officia deserunt
          mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </section>
      <footer>
        <a href="http://www.malasngoding.com">MalasNgoding</a>
      </footer>
    </div>
  </body>
</html>
