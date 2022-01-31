
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <img src="assets/images/logo/inverse.png" />
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Product</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-cart"></i>
                                        Product List
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ Route('product') }}" class="mm-active">
                                                <i class="metismenu-icon"></i>
                                                See All Product
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('add.product') }}">
                                                <i class="metismenu-icon"></i>
                                                Add New Product
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('deleted.product') }}">
                                                <i class="metismenu-icon"></i>
                                                View Deleted Product
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Category
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ Route('category') }}"> <i class="metismenu-icon"> </i>All Category </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('add.category') }}"> <i class="metismenu-icon"> </i>Add New Category </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('deleted.category') }}"> <i class="metismenu-icon"> </i>View Deleted Category </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="app-sidebar__heading">Purchase</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-culture"></i>
                                        Purchase List
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ Route('purchase') }}">
                                                <i class="metismenu-icon"></i>
                                                See All Purchase
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('add.purchase') }}">
                                                <i class="metismenu-icon"></i>
                                                Add New Purchase
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('deleted.purchase') }}">
                                                <i class="metismenu-icon"></i>
                                                View Deleted Purchase
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Sales</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-edit"></i>
                                        Sales List
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ Route('sale') }}">
                                                <i class="metismenu-icon"></i>
                                                See All Sales
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('add.sales') }}">
                                                <i class="metismenu-icon"></i>
                                                Add New Sales
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ Route('deleted.sales') }}">
                                                <i class="metismenu-icon"></i>
                                                View Deleted Sales
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">