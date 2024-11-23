@extends("admin.layout.app")

@section("content")
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header page-header-light shadow">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <h4 class="page-title mb-0">
                            Forms - <span class="fw-normal">Input Groups</span>
                        </h4>

                        <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>

                    <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                        <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                            <div class="dropdown w-100 w-sm-auto">
                                <a href="#" class="d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
                                    <div class="me-auto me-lg-1">
                                        <div class="fs-sm text-muted mb-1">Customer</div>
                                        <div class="fw-semibold">Tesla Motors Inc</div>
                                    </div>
                                </a>

                                <div class="dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0">
                                    <div class="d-flex align-items-center p-3">
                                        <h6 class="fw-semibold mb-0">Customers</h6>
                                        <a href="#" class="ms-auto">
                                            View all
                                            <i class="ph-arrow-circle-right ms-1"></i>
                                        </a>
                                    </div>
                                    <a href="#" class="dropdown-item active py-2">
                                        <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
                                        <div>
                                            <div class="fw-semibold">Tesla Motors Inc</div>
                                            <div class="fs-sm text-muted">42 users</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item py-2">
                                        <img src="../../../assets/images/brands/debijenkorf.svg" class="w-32px h-32px me-2" alt="">
                                        <div>
                                            <div class="fw-semibold">De Bijenkorf</div>
                                            <div class="fs-sm text-muted">49 users</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item py-2">
                                        <img src="../../../assets/images/brands/klm.svg" class="w-32px h-32px me-2" alt="">
                                        <div>
                                            <div class="fw-semibold">Royal Dutch Airlines</div>
                                            <div class="fs-sm text-muted">18 users</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item py-2">
                                        <img src="../../../assets/images/brands/shell.svg" class="w-32px h-32px me-2" alt="">
                                        <div>
                                            <div class="fw-semibold">Royal Dutch Shell</div>
                                            <div class="fs-sm text-muted">54 users</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item py-2">
                                        <img src="../../../assets/images/brands/bp.svg" class="w-32px h-32px me-2" alt="">
                                        <div>
                                            <div class="fw-semibold">BP plc</div>
                                            <div class="fs-sm text-muted">23 users</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="vr d-none d-sm-block flex-shrink-0 my-2 mx-3"></div>

                            <div class="d-inline-flex mt-3 mt-sm-0">
                                <a href="#" class="status-indicator-container ms-1">
                                    <img src="../../../assets/images/demo/users/face24.jpg" class="w-32px h-32px rounded-pill" alt="">
                                    <span class="status-indicator bg-warning"></span>
                                </a>
                                <a href="#" class="status-indicator-container ms-1">
                                    <img src="../../../assets/images/demo/users/face1.jpg" class="w-32px h-32px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </a>
                                <a href="#" class="status-indicator-container ms-1">
                                    <img src="../../../assets/images/demo/users/face3.jpg" class="w-32px h-32px rounded-pill" alt="">
                                    <span class="status-indicator bg-danger"></span>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3">
                                    <i class="ph-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-header-content d-lg-flex border-top">
                    <div class="d-flex">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="#" class="breadcrumb-item">Forms</a>
                            <span class="breadcrumb-item active">Input groups</span>
                        </div>

                        <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>

                    <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                        <div class="d-lg-flex mb-2 mb-lg-0">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                <i class="ph-lifebuoy me-2"></i>
                                Support
                            </a>

                            <div class="dropdown ms-lg-3">
                                <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                    <i class="ph-gear me-2"></i>
                                    <span class="flex-1">Settings</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-shield-warning me-2"></i>
                                        Account security
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chart-bar me-2"></i>
                                        Analytics
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-lock-key me-2"></i>
                                        Privacy
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-gear me-2"></i>
                                        All settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Input group addons -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Input group addons</h5>
                    </div>

                    <div class="card-body">
                        <p class="mb-4">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input, select or file input. Use <code>.input-group</code> with an <code>.input-group-text</code> to prepend or append elements to a single or multiple <code>.form-control</code> and <code>.form-select</code> elements. Place one add-on or button on either side of an input. You may also place one on both sides of an input. While multiple <code>&lt;input></code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input></code>.</p>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Text addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" placeholder="Left addon">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple left addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                        <input type="text" class="form-control" placeholder="Multiple left addons">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right addon">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple right addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Multiple right addons">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left and right text addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" placeholder="Left and right addons">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Icon addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left button addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-light" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right button addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <button class="btn btn-light" type="button">Button</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">No addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Centered addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <span class="input-group-text">
												<i class="ph-arrows-left-right"></i>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Icon addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left icon addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-user-circle"></i></span>
                                        <input type="text" class="form-control" placeholder="Left icon">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right icon addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right icon">
                                        <span class="input-group-text"><i class="ph-user-circle"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left and right icon addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-at"></i></span>
                                        <input type="text" class="form-control" placeholder="Left and right icons">
                                        <span class="input-group-text"><i class="ph-question"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Spinner addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left spinner addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<div class="spinner-border spinner-border-sm">
													<span class="visually-hidden">Loading...</span>
												</div>
											</span>
                                        <input type="text" class="form-control" placeholder="Left spinner">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right spinner addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right spinner">
                                        <span class="input-group-text">
												<div class="spinner-border spinner-border-sm">
													<span class="visually-hidden">Loading...</span>
												</div>
											</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left and right spinner addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<div class="spinner-border spinner-border-sm">
													<span class="visually-hidden">Loading...</span>
												</div>
											</span>
                                        <input type="text" class="form-control" placeholder="Left and right spinners">
                                        <span class="input-group-text">
												<div class="spinner-border spinner-border-sm">
													<span class="visually-hidden">Loading...</span>
												</div>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Form addons</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Default checkbox</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<input type="checkbox" checked>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Custom checkbox</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<input type="checkbox" class="form-check-input mt-0" checked>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Default radio</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<input type="radio" name="addon-radio">
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Custom radio</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<input type="radio" class="form-check-input mt-0" name="addon-radio-custom" checked>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Switch</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text form-switch">
												<input type="checkbox" class="form-check-input m-0" checked>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Color options</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Solid color addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text bg-primary border-primary text-white">
												<i class="ph-user-circle"></i>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Input color addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text bg-input">
												<i class="ph-user-circle"></i>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Text color addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text bg-input text-primary">
												<i class="ph-user-circle"></i>
											</span>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Outline addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text bg-transparent border-primary text-primary">
												<i class="ph-user-circle"></i>
											</span>
                                        <input type="text" class="form-control border-start-0 ms-0" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Light color addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text bg-primary-100 border-primary text-primary">
												<i class="ph-user-circle"></i>
											</span>
                                        <input type="text" class="form-control border-start-0 ms-0" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="fw-bold border-bottom pb-2 mb-3">Validation states</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Valid state</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control is-valid" placeholder="Left addon">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-lg-3">Invalid state</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control is-invalid" placeholder="Left addon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input group addons -->


                <!-- Input group buttons -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Input group buttons</h5>
                    </div>

                    <div class="card-body">
                        <p class="mb-4">Optional buttons as addons. Buttons in input groups are a bit different and don't require one extra level of nesting. Instead of wrapping the buttons in <code>.input-group-text</code>, you need to add button markup as-is before or after form inputs. Input group buttons support all available button options except sizing - all buttons height will be adjusted automatically according to the input group size.</p>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Button addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-light" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder="Left button">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right button">
                                        <button class="btn btn-light" type="button">Button</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left and right buttons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-light btn-icon" type="button">
                                            <i class="ph-user-circle"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Left and right buttons">
                                        <button class="btn btn-light" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Button dropdown addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left button dropdown</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Left dropdown">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right button dropdown</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right dropdown">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left and right button dropdowns</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Left and right dropdowns">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Segmented button addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Left buttons">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right buttons">
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left and right buttons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-light">Button</button>
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>

                                        <input type="text" class="form-control" placeholder="Left and right buttons">

                                        <button type="button" class="btn btn-light btn-icon"><i class="ph-gear"></i></button>
                                        <button type="button" class="btn btn-light dropdown-toggle btn-icon" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="fw-bold border-bottom pb-2 mb-3">Color options</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Solid button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-success" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Text color button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-link text-success border" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Outline button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-outline-success" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-lg-3">Light button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-success-100 border-success text-success" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input group buttons -->


                <!-- Input group with select -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Input group with selects</h5>
                    </div>

                    <div class="card-body">
                        <p class="mb-4">You can also use selects instead of regular inputs and also mix them in different order. Selects in input group don't require any additional wrappers and/or specific class names, it works out of the box and logic is similar to input fields. Just add <code>&lt;select></code> element markup with <code>.form-select</code> class inside <code>.input-group</code> or mix it with other elements such as buttons, file/text inputs or text addons.</p>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Text addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple left addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="input-group-text">@</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple right addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Button addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-light" type="button">Button</button>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple left buttons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <button class="btn btn-light" type="button">Button</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple right buttons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Multiple selects</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left button addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-light" type="button">Button</button>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right button addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <button class="btn btn-light" type="button">Button</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">No addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Centered addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="input-group-text">
												<i class="ph-arrows-left-right"></i>
											</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="fw-bold border-bottom pb-2 mb-3">Mixing types</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">With left text input</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <button class="btn btn-light" type="button">
                                            <i class="ph-gear"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left select auto width</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <select class="form-select w-auto flex-grow-0">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <button class="btn btn-light" type="button">
                                            <i class="ph-gear"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">With right text input</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-lg-3">Right select auto width</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <select class="form-select w-auto flex-grow-0">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input group with select -->


                <!-- Input group with file input -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Input group with file input</h5>
                    </div>

                    <div class="card-body">
                        <p class="mb-4">You can also use file inputs instead of regular inputs and also mix them in different order. File inputs in input group don't require any additional wrappers and/or specific class names, it works out of the box and logic is similar to input fields. Just add a regular file input type markup with <code>.form-control</code> class inside <code>.input-group</code> or mix it with other elements such as buttons, selects, text inputs or text addons.</p>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Text addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">.pdf, .png</span>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple left addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text">.pdf</span>
                                        <span class="input-group-text">.png</span>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right text addon</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control">
                                        <span class="input-group-text">.pdf, .png</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple right addons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control">
                                        <span class="input-group-text">.pdf</span>
                                        <span class="input-group-text">.png</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Button addon</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Left button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button class="btn btn-light" type="button">Button</button>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple left buttons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Right button</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control">
                                        <button class="btn btn-light" type="button">Button</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Multiple right buttons</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control">
                                        <button type="button" class="btn btn-light">Action</button>
                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-bs-toggle="dropdown"></button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Mixing types</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">With left text input</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                        <input type="file" class="form-control">
                                        <button class="btn btn-light" type="button">
                                            <i class="ph-gear"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">With left select</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-select w-auto flex-grow-0">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <input type="file" class="form-control">
                                        <button class="btn btn-light" type="button">
                                            <i class="ph-gear"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">With right text input</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<i class="ph-file-arrow-up"></i>
											</span>
                                        <input type="file" class="form-control">
                                        <input type="text" class="form-control" placeholder="Input placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">With right select</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<i class="ph-file-arrow-up"></i>
											</span>
                                        <input type="file" class="form-control">
                                        <select class="form-select w-auto flex-grow-0">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="fw-bold border-bottom pb-2 mb-3">Validation states</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Valid state</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<i class="ph-file-arrow-up"></i>
											</span>
                                        <input type="file" class="form-control is-valid">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-lg-3">Invalid state</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<i class="ph-file-arrow-up"></i>
											</span>
                                        <input type="file" class="form-control is-invalid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input group with file input -->


                <!-- Input group options -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Sizing options</h5>
                    </div>

                    <div class="card-body">
                        <p class="mb-4">Input group supports 3 sizing variations: default, small and large. Default size doesn't require any additional sizing class name, small size requires <code>.input-group-sm</code> class and large size requires <code>.input-group-lg</code> class added to default <code>.input-group</code> container. All other elements within input group are adjusted automatically.</p>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Input fields</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Text input - large</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-lg">
											<span class="input-group-text">
												<i class="ph-at"></i>
											</span>
                                        <input type="text" class="form-control" placeholder=".input-group-lg">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Text input - default</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<i class="ph-at"></i>
											</span>
                                        <input type="text" class="form-control" placeholder=".input-group">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Text input - small</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-sm">
											<span class="input-group-text">
												<i class="ph-at"></i>
											</span>
                                        <input type="text" class="form-control" placeholder=".input-group-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="fw-bold border-bottom pb-2 mb-3">Selects</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Select - large</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-lg">
											<span class="input-group-text">
												<i class="ph-user-circle"></i>
											</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Select - default</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<i class="ph-user-circle"></i>
											</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Select - small</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-sm">
											<span class="input-group-text">
												<i class="ph-user-circle"></i>
											</span>
                                        <select class="form-select">
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="fw-bold border-bottom pb-2 mb-3">File inputs</div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">File input - large</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-lg">
											<span class="input-group-text">
												<i class="ph-file-arrow-up"></i>
											</span>
                                        <input type="file" class="form-control form-control-lg">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">File input - default</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
											<span class="input-group-text">
												<i class="ph-file-arrow-up"></i>
											</span>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-form-label col-lg-3">File input - small</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-sm">
											<span class="input-group-text">
												<i class="ph-file-arrow-up"></i>
											</span>
                                        <input type="file" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input group options -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-sm navbar-footer border-top">
                <div class="container-fluid">
                    <span>&copy; 2022 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web App Kit</a></span>

                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-lifebuoy"></i>
                                    <span class="d-none d-md-inline-block ms-2">Support</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item ms-md-1">
                            <a href="https://demo.interface.club/limitless/demo/Documentation/index.html" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-file-text"></i>
                                    <span class="d-none d-md-inline-block ms-2">Docs</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item ms-md-1">
                            <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-shopping-cart"></i>
                                    <span class="d-none d-md-inline-block ms-2">Purchase</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
@endsection
