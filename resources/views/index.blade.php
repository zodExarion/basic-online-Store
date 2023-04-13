<x-layout>
    <div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search by Name, Category"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                </form>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="me-auto navbar-search w-100">
                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-shopping-cart fa-fw"></i></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                <h6 class="dropdown-header">Cart</h6><a class="dropdown-item d-flex align-items-center w-100" href="#">
                                    <div class="dropdown-list-image me-3 w-25"><input type="number" class="w-100 h-100"></div>
                                    <div class="fw-bold w-50">
                                        <div class="text-truncate"><span>Name</span></div>
                                        <p class="small text-gray-500 mb-0">Total: 500</p>
                                    </div>
                                    <div class="w-25 text-center"><i class="fas fa-trash text-danger"></i></div>
                                </a><a class="dropdown-item d-flex align-items-center w-100" href="#">
                                    <div class="dropdown-list-image me-3 w-25"><input type="number" class="w-100 h-100"></div>
                                    <div class="fw-bold w-50">
                                        <div class="text-truncate"><span>Name</span></div>
                                        <p class="small text-gray-500 mb-0">Total: 500</p>
                                    </div>
                                    <div class="w-25 text-center"><i class="fas fa-trash text-danger"></i></div>
                                </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All</a>
                            </div>
                        </div>
                        <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                    </li>
                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2><strong><span style="color: rgb(0, 0, 0); background-color: transparent;">Basic Online Store</span></strong><br></h2>
                    <p class="w-lg-50">Take care of the Hendrerit until it is convenient for the Hendreit. The world needs basketball.</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">Category</p>
                            <h4 class="card-title">Product Name</h4>
                            <p class="card-text">Product Description: Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">Category</p>
                            <h4 class="card-title">Product Name</h4>
                            <p class="card-text">Product Description: Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">Category</p>
                            <h4 class="card-title">Product Name</h4>
                            <p class="card-text">Product Description: Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>