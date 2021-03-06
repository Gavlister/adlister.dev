<!--partial view for navbar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="/">Gavlister&trade;</a>
   </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="/ads">Items For Sale</a></li>
      <?php if (Auth::check()) : ?>
        <li><a href="/account/?id=<?= Auth::id(); ?>">Account</a></li>
        <li><a href="/ads/create">Create Post</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Search<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <form class="form-inline">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default">Go!</button>
                </span>
              </div>
              <div class="form-inline">
                <div class="radio col-xs-offset-1">
                  <input type="radio" name="searchby" value="tag" checked> Tag<br>
                  <input type="radio" name="searchby" value="user"> User<br>
                  <input type="radio" name="searchby" value="item"> Gavin
                </div>
              </div>
            </form>
          </ul>
        </li>

        <li><a href="/logout">Logout</a></li>
      <?php else : ?>
        <li><a href="/account/login">Login</a></li>
        <li><a href="/account/signup">Signup</a></li>
      <?php endif; ?>
    </ul>
    <?php if (Auth::check()) : ?>
      <ul class="nav navbar-nav navbar-right hidden-xs">
        <span class="navbar-text">Welcome <?= Auth::user()->name; ?></span>
      </ul>
    <?php endif; ?>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>