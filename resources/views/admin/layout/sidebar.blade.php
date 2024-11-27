<div class="sidebar sidebar-main sidebar-expand-lg align-self-start">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Menü</h5>

                <div>
                    <button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link @if($title == 'Anasayfa') {{ 'active' }} @endif ">
                        <i class="ph-house"></i>
                        <span>
                            {{ "Anasayfa" }}
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item">
                    <a href="{{ route("gallery") }}" class="nav-link @if($title == 'Galeri') {{ 'active' }} @endif">
                        <i class="ph-layout"></i>
                        <span>{{ 'Galeri'  }}</span>
                    </a>
                </li>
                <li class="nav-item nav-item">
                    <a href="{{ route("blog") }}" class="nav-link @if($title == 'Blog') {{ 'active' }} @endif">
                        <i class="ph ph-text-align-center"></i>
                        <span>{{ 'Blog'  }}</span>
                    </a>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-note-blank"></i>
                        <span>Starter kit</span>
                    </a>
                    <ul class="nav-group-sub collapse" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="../seed/layout_navbar_fixed.html" class="nav-link">Fixed navbar</a></li>
                        <li class="nav-item"><a href="../seed/layout_navbar_hideable.html" class="nav-link">Hideable navbar</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="../seed/layout_no_header.html" class="nav-link">No header</a></li>
                        <li class="nav-item"><a href="../seed/layout_no_footer.html" class="nav-link">No footer</a></li>
                        <li class="nav-item"><a href="../seed/layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="../seed/layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
                        <li class="nav-item"><a href="../seed/layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
                        <li class="nav-item"><a href="../seed/layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="../seed/layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                        <li class="nav-item"><a href="../seed/layout_boxed_content.html" class="nav-link">Boxed content</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../../../../docs/other_changelog.html" class="nav-link">
                        <i class="ph-list-numbers"></i>
                        <span>Changelog</span>
                        <span class="badge bg-primary align-self-center rounded-pill ms-auto">4.0</span>
                    </a>
                </li>

                <!-- Layout -->
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Layout</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-layout"></i>
                        <span>Page layouts</span>
                    </a>

                    <ul class="nav-group-sub collapse" data-submenu-title="Page layouts">
                        <li class="nav-item"><a href="layout_navbar_fixed.html" class="nav-link">Fixed navbar</a></li>
                        <li class="nav-item"><a href="layout_navbar_hideable.html" class="nav-link">Hideable navbar</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_no_header.html" class="nav-link">No header</a></li>
                        <li class="nav-item"><a href="layout_no_footer.html" class="nav-link">No footer</a></li>
                        <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
                        <li class="nav-item"><a href="layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
                        <li class="nav-item"><a href="layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                        <li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-columns"></i>
                        <span>Sidebars</span>
                    </a>
                    <ul class="nav-group-sub collapse" data-submenu-title="Sidebars">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Main sidebar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_default_resizable.html" class="nav-link">Resizable</a></li>
                                <li class="nav-item"><a href="sidebar_default_resized.html" class="nav-link">Resized</a></li>
                                <li class="nav-item"><a href="sidebar_default_hideable.html" class="nav-link">Hideable</a></li>
                                <li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Hidden</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_default_stretched.html" class="nav-link">Stretched</a></li>
                                <li class="nav-item"><a href="sidebar_default_color_dark.html" class="nav-link">Dark color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Secondary sidebar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_secondary_hideable.html" class="nav-link">Hideable</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_secondary_stretched.html" class="nav-link">Stretched</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Right sidebar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_right_hideable.html" class="nav-link">Hideable</a></li>
                                <li class="nav-item"><a href="sidebar_right_hidden.html" class="nav-link">Hidden</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_right_stretched.html" class="nav-link">Stretched</a></li>
                                <li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-rows"></i>
                        <span>Navbars</span>
                    </a>
                    <ul class="nav-group-sub collapse" data-submenu-title="Navbars">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Single navbar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Top static</a></li>
                                <li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Top fixed</a></li>
                                <li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Bottom static</a></li>
                                <li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Bottom fixed</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Multiple navbars</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Top static</a></li>
                                <li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Top fixed</a></li>
                                <li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Bottom static</a></li>
                                <li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Bottom fixed</a></li>
                                <li class="nav-item"><a href="navbar_multiple_top_bottom_fixed.html" class="nav-link">Top and bottom fixed</a></li>
                                <li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Secondary sticky</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Content navbar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
                                <li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
                        <li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
                        <li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-arrow-fat-lines-down"></i>
                        <span>Vertical navigation</span>
                    </a>
                    <ul class="nav-group-sub collapse" data-submenu-title="Vertical navigation">
                        <li class="nav-item"><a href="navigation_vertical_styles.html" class="nav-link">Navigation styles</a></li>
                        <li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
                        <li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
                        <li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
                        <li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
                        <li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
                        <li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-arrow-fat-lines-right"></i>
                        <span>Horizontal navigation</span>
                    </a>
                    <ul class="nav-group-sub collapse" data-submenu-title="Horizontal navigation">
                        <li class="nav-item"><a href="navigation_horizontal_styles.html" class="nav-link">Navigation styles</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">Navigation elements</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="ph-arrow-elbow-down-right"></i> <span>Menu levels</span></a>
                    <ul class="nav-group-sub collapse" data-submenu-title="Menu levels">
                        <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Second level with child</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Third level with child</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                    </ul>
                </li>
                <!-- /layout -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>

<div class="content-wrapper">


    <!-- Page header -->
    <div class="page-header page-header-light shadow mb-2">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    {{ $title }}  @if($sub_title == "") {{ "" }} @else {{ " - " }}@endif <span class="fw-normal">{{ $sub_title }}</span>
                </h4>

                <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /page header -->

