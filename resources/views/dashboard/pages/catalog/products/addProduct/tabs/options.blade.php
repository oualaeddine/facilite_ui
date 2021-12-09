<div class="card">
    <div class="card-block">

        {{-- Start Visibility inputs --}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Visibility</h5>
            <p class="text-muted mb-4">Where do you want your product to appear?</p>
            <p>Here is a preview of your search engine result, play with it!</p>
            <div class="row">
                <div class="col-lg-4">
                    <select class="form-select form-control bordered-select">
                        <option value="" data-select2-id="16">Choose a feature</option>
                        <option value="1">Composition</option>
                        <option value="2">Property</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Available for order
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Web only (not sold in your retail store)
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col-lg-7">
                    <label class="form-control-label mb-1">Tags</label>
                    <input type="text"  class="form-control" placeholder="Use a comma to create separate tags. E.g.: dress, cotton, party dresses.">
                </div>
            </div>
        </div>
        {{-- End Visibility inputs --}}

        {{-- Start Condition & References inputs --}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Condition & References</h5>
        </div>

        <div class="mb-4">
            <div class="row mb-3">
                <div class="col-lg-4">
                    <label class="form-control-label mb-1">Condition</label>
                    <select class="form-select form-control bordered-select">
                        <option value="">new</option>
                        <option value="1">used</option>
                        <option value="2">Property</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Display condition on product page
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <label class="form-control-label mb-1">ISBN</label>
                    <input type="text"  class="form-control">
                </div>
                <div class="col-lg-4">
                    <label class="form-control-label mb-1">EAN-13 or JAN barcode</label>
                    <input type="text"  class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <label class="form-control-label mb-1">UPC barcode</label>
                    <input type="text"  class="form-control">
                </div>
                <div class="col-lg-4">
                    <label class="form-control-label mb-1">MPN</label>
                    <input type="text"  class="form-control">
                </div>
            </div>
        </div>
        {{-- End Condition & References inputs --}}

        {{-- Start Attached files inputs --}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Attached files</h5>
            <p class="text-muted">
                Select the files (instructions, documentation, recipes, etc.) your customers can directly download on this product page.<br>
                Need to browse all files? Go to <a href="#">Catalog > Files</a>
            </p>

            <a class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="fa fa-plus"></i>Attach a new file</a>
        </div>
        {{-- End Attached files inputs --}}
    </div>


</div>