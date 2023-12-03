<header class="header_area">
    <div class="search">
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search here..." aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <button type="submit" class="input-group-text btn btn-sm" id="basic-addon2">Search</span>
            </div>
        </form>
    </div>
    <div class="header_right">

        <div class="profile">
            <img src="{{asset('ui/backend/images/admin.jpg')}}" alt="profile image">
            {{-- {{auth()->user()->name}} --}}
        </div>

        <div class="notification">
            <a href="">
                <i class="fa fa-bell"></i>
                <span class="count bg-danger">13</span>
            </a>
        </div>

        <div class="massage">
            <a href="">
                <i class="fa fa-envelope"></i>
                <span class="count bg-primary">14</span>
            </a>
        </div>
    </div>
</header>