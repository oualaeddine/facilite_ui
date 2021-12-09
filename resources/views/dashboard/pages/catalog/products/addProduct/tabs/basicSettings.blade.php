
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
                    <a id="add-brand" class="btn waves-effect waves-light btn-primary btn-outline-primary mt-2">
                        <i class="fa fa-plus"></i>Add a brand
                    </a>
                </div>
                {{-- End Brand--}}
            </div>
            {{-- End Left Section--}}

            {{-- Start Right Section--}}
            <div class="col-md-3">
                {{-- Start Combinations input --}}
                <div class="form-group mb-5 combinations-quantities">
                    <h5 class="fw-bold mt-1 mb-3">Combinations</h5>
                    <div class="radio">
                        <label>
                            <input type="radio" name="combinations_quantities" value="0" checked="checked">
                            Simple product
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="combinations_quantities" value="1">
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
