<div class="card">
    <div class="card-block">

        {{-- Start Package dimension inputs--}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Package dimension</h5>
            <p class="text-muted">Charge additional shipping costs based on packet dimensions covered here.</p>

            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <label class="form-control-label mb-1">tax excl</label>
                    <div class="input-group">
                        <input type="number" value="0" class="form-control" placeholder="Right addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">DZD</label>
                                            </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <label class="form-control-label mb-1">tax incl</label>
                    <div class="input-group">
                        <input type="number" value="0" class="form-control" placeholder="Right addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">DZD</label>
                                            </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="row">
                        <label class="form-control-label mb-1">Retail price per unit (tax excl.)</label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="number" value="0" class="form-control" placeholder="Right addon">
                                <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">DZD</label>
                                            </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="number" value="0" class="form-control" placeholder="Right addon">
                                <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">DZD</label>
                                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <label class="form-control-label">Tax rule</label>
                    <select class="form-select form-control bordered-select">
                        <option value="" data-select2-id="16">Choose a feature</option>
                        <option value="1">Composition</option>
                        <option value="2">Property</option>
                    </select>
                </div>

                <div class="col-12 mt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Display the "On sale!" flag on the product page, and on product listings.
                        </label>
                    </div>
                </div>

                <div class="col-lg-5 mt-3">
                    <div class="alert alert-primary background-primary alert-dismissible">
                        <p>
                            Final retail price: <strong class="fw-bold">€0.00 tax incl.</strong> / <span>€0.00</span> tax excl.
                        </p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Package dimension inputs--}}

        {{-- Start Cost price inputs--}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Cost price</h5>
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <label class="form-control-label mb-1">Cost price (tax excl.)</label>
                    <div class="input-group">
                        <input type="number" value="0" class="form-control" placeholder="Right addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">DZD</label>
                                            </span>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Cost price inputs--}}

        {{-- Start Specific prices inputs--}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Specific prices</h5>
            <div class="card">
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="fw-bold mt-1 mb-3">Specific price conditions</h6>
                        <label class="form-control-label">For</label>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <select class="form-select form-control bordered-select">
                                    <option value="" data-select2-id="16">All currencies</option>
                                    <option value="1">Composition</option>
                                    <option value="2">Property</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <select class="form-select form-control bordered-select">
                                    <option value="0">All countries</option>
                                    <option value="1">Composition</option>
                                    <option value="2">Property</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <select class="form-select form-control bordered-select">
                                    <option value="" data-select2-id="16">All groups</option>
                                    <option value="1">Composition</option>
                                    <option value="2">Property</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <label class="form-control-label">Customer</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="All customers">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-3">
                                <label class="form-control-label">Available from</label>
                                <input type="date"
                                       class="form-control"
                                       placeholder="All customers">
                            </div>
                            <div class="col-lg-3">
                                <label class="form-control-label">To</label>
                                <input type="date"
                                       class="form-control"
                                       placeholder="All customers">
                            </div>
                            <div class="col-lg-2">
                                <label class="form-control-label">Starting at</label>
                                <div class="input-group">
                                    <input type="number" value="1" class="form-control">
                                    <span class="input-group-text addon-style bg-white">
                                                            <label class="text-muted">Unit(s)</label>
                                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold mt-1 mb-3">Impact on price</h6>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6">
                                <label class="form-control-label">Product price (tax excl.)</label>
                                <div class="input-group">
                                    <input type="number" id="init-val" value="1" class="form-control" disabled>
                                    <span class="input-group-text addon-style bg-white">
                                                            <label class="text-muted">DZD</label>
                                                        </span>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-check mt-4 pt-1">
                                    <input class="form-check-input" type="checkbox" value="" id="leave-init-val">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Leave initial price
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-control-label mb-1">Apply a discount of</label>
                            <div class="col-lg-3 col-md-6">
                                <input type="number" value="0" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select form-control bordered-select">
                                    <option value="amount">€</option>
                                    <option value="percentage">%</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select form-control bordered-select">
                                    <option value="0">Tax excluded</option>
                                    <option value="1" selected="selected">Tax included</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-end">
                            <button class="btn waves-effect waves-light btn-inverse btn-outline-inverse">Cancel</button>
                            <button class="btn waves-effect waves-light btn-success btn-outline-success">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Specific prices inputs--}}

        {{-- Start Priority management inputs--}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Priority management</h5>
            <div class="row mb-3">
                <label class="form-control-label mb-1">Priorities</label>
                <div class="col-lg-3 col-md-6">
                    <select class="form-select form-control bordered-select">
                        <option value="id_shop">Shop</option>
                        <option value="id_currency" selected="selected">Currency</option>
                        <option value="id_country">Country</option>
                        <option value="id_group">Group</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <select class="form-select form-control bordered-select">
                        <option value="id_shop" selected="selected">Shop</option>
                        <option value="id_currency">Currency</option>
                        <option value="id_country">Country</option>
                        <option value="id_group">Group</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <select class="form-select form-control bordered-select">
                        <option value="id_shop">Shop</option>
                        <option value="id_currency">Currency</option>
                        <option value="id_country" selected="selected">Country</option>
                        <option value="id_group">Group</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <select class="form-select form-control bordered-select">
                        <option value="id_shop">Shop</option>
                        <option value="id_currency">Currency</option>
                        <option value="id_country">Country</option>
                        <option value="id_group" selected="selected">Group</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check mt-4 pt-1">
                        <input class="form-check-input" type="checkbox" value="" >
                        <label class="form-check-label" for="defaultCheck1">
                            Apply to all products
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Priority management inputs--}}
    </div>
</div>
