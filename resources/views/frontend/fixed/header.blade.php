<header id="fh5co-header-section" class="sticky-banner">
      <div class="container">
        <div class="nav-header"><a href="javascript:void(0)" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
          <h1 id="fh5co-logo"><a href=""><i class="icon-airplane"></i>Tourism World</a></h1>
          <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">

              
              <li><a href="pages/flight.php">Transport</a></li>
              <li><a href="pages/hotel.php">Hotel</a></li>
              <li><a href="pages/car.php">Resort</a></li>
              <li><a href="pages/blog.php">Gallery</a></li>
              <li><a href="pages/contact.php">Contact</a></li>
              
        <!-- Button trigger modal -->
          <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Login / Registration
          </button> </li>

            </ul>
          </nav>
        </div>
      </div>
    </header>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tourist Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('registration')}}" method="post">
                @csrf
            <div class="modal-body">
                    <div class="form-group">
                        <label for="">Enter Tourist Name:</label>
                        <input class="form-control" type="text" required name="name" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Tourist Email:</label>
                        <input class="form-control" type="email" required name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Tourist Password:</label>
                        <input class="form-control" type="password" required name="password" placeholder="Enter Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>