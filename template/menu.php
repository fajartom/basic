
<div class="container-fluid bg-light">
  <div class="container bg-light me-pl-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Responsive Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item <?=($_GET['page']=='main') || empty($_GET['page']) ? 'active' : ''?>">
            <a class="nav-link" href="index.php?page=main">Home</a>
          </li>
          <li class="nav-item <?=($_GET['page']=='assets') ? 'active' : ''?>">
            <a class="nav-link" href="index.php?page=assets">Assets</a>
          </li>
          <li class="nav-item <?=($_GET['page']=='phpintro') ? 'active' : ''?>">
            <a class="nav-link" href="index.php?page=phpintro">PHP Intro</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>