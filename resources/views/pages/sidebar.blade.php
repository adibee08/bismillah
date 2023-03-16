<div id="menu">
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="menu-inner">
        
        <ul>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link align-middle px-0">
                  <span class="ms-1 d-none d-sm-inline text-custom">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/products" class="nav-link align-middle px-0">
                  <span class="ms-1 d-none d-sm-inline text-custom">Kelola Data Properti</span>
                </a>
            </li>
            <li>
                <div class="dropdown pb-4">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">
                            <span class="d-none d-sm-inline mx-1">Logout</span>
                        </button>
                        
                      </form>

                </div>
                  
            </li>
        </ul>
        
    </div>


   
</div>


