
<div class="card">
    <div class="card-block">
        <div class="row">
            {{-- Start Left Section--}}
            <div class="col-md-9">
                {{-- Start File Upload input--}}
                <div action="/just-for-dropzone" class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </div>
                {{-- End File Upload input--}}

                {{-- Start Editors inputs --}}
                <div class="mt-5">
                    <h5 class="fw-bold mt-1 mb-3">Summary</h5>
                    <textarea id="summary-editor"></textarea>
                </div>

                <div class="mt-5">
                    <h5 class="fw-bold mt-1 mb-3">Description</h5>
                    <textarea id="description-editor"></textarea>
                </div>
                {{-- End Editors inputs --}}

                {{-- Start Features--}}
                <div class="mt-5">
                    <h5 class="fw-bold mt-1 mb-3">Features</h5>
                    <div id="feature-prototype" class="mt-3 d-none">
                        <div class="row product-feature mt-3">
                            <div class="col-md-4">
                                <fieldset class="form-group mb-0">
                                    <label class="form-control-label">Feature</label>
                                    <select class="form-select form-control bordered-select">
                                        <option value="" data-select2-id="16">Choose a feature</option>
                                        <option value="1">Composition</option>
                                        <option value="2">Property</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                                <fieldset class="form-group mb-0">
                                    <label class="form-control-label">Pre-defined value</label>
                                    <select class="form-select form-control bordered-select">
                                        <option value="">Choose a value</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label">OR Customized value</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Enter your product name">
                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-icon delete-feature"><i class="fa fa-trash mt-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="features"></div>
                    <button id="add-feature" class="btn waves-effect waves-light btn-primary btn-outline-primary mt-2">
                        <i class="fa fa-plus"></i>Add a feature
                    </button>
                </div>
                {{-- End Features--}}

                {{-- Start Brand--}}
                <div class="mt-5">
                    <h5 class="fw-bold mt-1 mb-3">Brand</h5>
                    <div id="brand-prototype" class="d-none">
                        <div class="row brand-content">
                            <div class="col-md-3">
                                <select class="form-select form-control bordered-select">
                                    <option value="" data-select2-id="16">Choose a feature</option>
                                    <option value="1">Composition</option>
                                    <option value="2">Property</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-icon delete-brand"><i class="fa fa-trash mt-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="brand">
                    </div>
                    <button id="add-brand" class="btn waves-effect waves-light btn-primary btn-outline-primary mt-2">
                        <i class="fa fa-plus"></i>Add a brand
                    </button>
                </div>
                {{-- End Brand--}}
            </div>
            {{-- End Left Section--}}

            {{-- Start Right Section--}}
            <div class="col-md-3">
                {{-- Start Combinations input --}}
                <div class="form-group mb-5">
                    <h5 class="fw-bold mt-1 mb-3">Combinations</h5>
                    <div class="radio">
                        <label>
                            <input type="radio" name="show_variations" value="0" checked="checked">
                            Simple product
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="show_variations" value="1">
                            Product with combinations
                        </label>
                    </div>
                </div>
                {{-- End Combinations input --}}

                {{-- Start Reference input --}}
                <div class="form-group mb-5">
                    <h5 class="fw-bold mt-1 mb-3">Reference</h5>
                    <input type="text" class="form-control">
                </div>
                {{-- End Reference input --}}

                {{-- Start Quantity input --}}
                <div class="form-group mb-5">
                    <h5 class="fw-bold mt-1 mb-3">Quantity</h5>
                    <input type="number" class="form-control">
                    <span class="text-secondary fw-lighter">
                        Advanced settings in
                        <a href="#" class="text-primary fw-bold">quantities</a>
                    </span>
                </div>
                {{-- End Quantity input --}}

                {{-- Start Price input --}}
                <div class="form-group mb-5">
                    <h5 class="fw-bold mt-1 mb-3">Price</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-control-label">Tax excluded</label>
                            <div class="input-group money-type">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">€ </span>
                                </div>
                                <input type="text" id="form_step1_price_shortcut" name="form[step1][price_shortcut]" class="form-control" value="0.000000">
                            </div>

                        </div>
                        <div class="col-md-6 col-offset-md-1">
                            <label class="form-control-label">Tax included</label>
                            <div class="input-group money-type">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">€ </span>
                                </div>
                                <input type="text" id="form_step1_price_ttc_shortcut" name="form[step1][price_ttc_shortcut]" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-12 mt-1">
                            <label class="form-control-label">Tax rule</label>
                            <select class="form-select form-control bordered-select">
                                <option value="" data-select2-id="16">Choose a feature</option>
                                <option value="1">Composition</option>
                                <option value="2">Property</option>
                            </select>

                        </div>
                        <div class="col-md-12">
                            <span class="text-secondary fw-lighter">
                                Advanced settings in
                                <a href="#" class="text-primary fw-bold">pricing</a>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- End Price input --}}

                {{-- Start Categories input --}}
                <div class="form-group mb-5">
                    <h5 class="fw-bold mt-1 mb-3">Categories</h5>
                    <select class="quantities-select" multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Coming</option>
                        <option value="WY">Hanry Die</option>
                        <option value="WY">John Doe</option>
                    </select>
                </div>
                {{-- End Categories input --}}

            </div>
            {{-- End Right Section--}}
        </div>
    </div>
</div>
