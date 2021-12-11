<div class="card">
    <div class="card-block">

        {{-- Start Quantities inputs--}}
        <div class="mb-5">
            <h5 class="fw-bold mt-1 mb-3">Quantities</h5>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <label class="form-control-label mb-1">Minimum quantity for sale</label>
                    <input type="number" min="0" value="1" class="form-control">
                </div>
            </div>
        </div>
        {{-- End Quantities inputs--}}

        {{-- Start Stock inputs--}}
        <div class="mb-5">
            <h5 class="fw-bold mt-1 mb-3">Stock</h5>
            <div class="row mt-3">
                <div class="col-lg-4 col-md-6">
                    <label class="form-control-label mb-1">Low stock level</label>
                    <input type="number" min="0" value="0" class="form-control">
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="form-check mt-4 pt-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Send me an email when the quantity is below or equals this level
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Stock inputs--}}

        {{-- Start Availability preferences inputs--}}
        <div class="mb-5">
            <h5 class="fw-bold mt-1 mb-3">Availability preferences</h5>
            <label class="form-control-label mb-1">Behavior when out of stock</label>
            <div class="radio">
                <label class="form-label">
                    <input type="radio" name="radio" checked="checked">
                    Deny orders
                </label>
            </div>
            <div class="radio">
                <label class="form-label">
                    <input type="radio" name="radio">
                    Allow orders
                </label>
            </div>
            <div class="radio">
                <label class="form-label">
                    <input type="radio" name="radio">
                    Use default behavior (Deny orders)
                </label>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <label class="form-control-label mb-1">Label when in stock</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6">
                    <label class="form-control-label mb-1">Label when out of stock</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6">
                    <label class="form-control-label mb-1">Availability date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>
        {{-- End Availability preferences inputs--}}
    </div>
</div>
