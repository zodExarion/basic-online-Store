<x-headerFooter>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="{{ route('home') }}">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-store" style="transform: rotate(15deg);"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Store</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-store-alt"></i><span>&nbsp;Products</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            {{$slot}}
            <div class="modal fade" id="confirm_modal" role='dialog'>
                <div class="modal-dialog modal-md" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                  </div>
                  <div class="modal-body">
                    <div id="delete_content"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
                    
                  </div>
                  </div>
                </div>
              </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Store 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
  </x-headerFooter>