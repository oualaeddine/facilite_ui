<div class="card">
    <div class="card-block">

        {{-- Start Package dimension inputs --}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Package dimension</h5>
            <p class="text-muted">Charge additional shipping costs based on packet dimensions covered here.</p>

            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <label class="form-control-label mb-1">Width</label>
                    <div class="input-group">
                        <input type="number" value="0" class="form-control" placeholder="Right addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">cm</label>
                                            </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <label class="form-control-label mb-1">Height</label>
                    <div class="input-group">
                        <input type="number" value="0" class="form-control" placeholder="Right addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">cm</label>
                                            </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <label class="form-control-label mb-1">Depth</label>
                    <div class="input-group">
                        <input type="number" value="0" class="form-control" placeholder="Right addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">cm</label>
                                            </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <label class="form-control-label mb-1">Weight</label>
                    <div class="input-group">
                        <input type="number" value="0" class="form-control" placeholder="Right addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">kg</label>
                                            </span>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Package dimension inputs --}}

        {{-- Start Delivery Time inputs --}}
{{--        <div class="mb-4">--}}
{{--            <h5 class="fw-bold mt-1 mb-3">Delivery Time</h5>--}}
{{--            <div>--}}
{{--                <div class="radio">--}}
{{--                    <label class="form-label">--}}
{{--                        <input type="radio" name="radio2" checked="checked">--}}
{{--                        None--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="radio">--}}
{{--                    <label class="form-label">--}}
{{--                        <input type="radio" name="radio2">--}}
{{--                        Default delivery time--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="radio">--}}
{{--                    <label class="form-label">--}}
{{--                        <input type="radio" name="radio2">--}}
{{--                        Specific delivery time to this product--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <label class="form-control-label mb-1">Delivery time of in-stock products:</label>--}}
{{--                    <input type="text" min="0" value="0" class="form-control" placeholder="Delivered within 3-4 days">--}}
{{--                    <small class="text-muted">Leave empty to disable.</small>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <label class="form-control-label mb-1">Delivery time of out-of-stock products with allowed orders:</label>--}}
{{--                    <input type="text" min="0" value="0" class="form-control" placeholder="Delivered within 5-7 days">--}}
{{--                    <small class="text-muted">Leave empty to disable.</small>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
        {{-- End Delivery Time inputs --}}

        {{-- Start Shipping fees inputs --}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Shipping fees</h5>
            <label class="form-control-label mb-1">Does this product incur additional shipping costs?</label>
            <div class="row">
                <div class="col-lg-3">
                    <div class="input-group">
                        <input type="number" value="0.00000" class="form-control" placeholder="Left addon">
                        <span class="input-group-text addon-style bg-white">
                                                <label class="text-muted">DZD</label>
                                            </span>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Shipping fees inputs --}}

        {{-- Start Available carriers inputs --}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Available carriers</h5>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    1 - PrestaShop (Pick up in-store)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    2 - My carrier (Delivery next day!)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    3 - My cheap carrier (Buy more to pay less!)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    4 - My light carrier (The lighter the cheaper!)
                </label>
            </div>

        </div>

        <div class="alert alert-warning icons-alert alert-dismissible">
            <p>If no carrier is selected then all the carriers will be available for customers orders.</p>
        </div>
        {{-- End Available carriers inputs --}}
    </div>
</div>
