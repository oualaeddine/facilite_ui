<div class="card">
    <div class="card-block">

        {{-- Start Search Engine Optimization inputs--}}
        <div class="mb-4">
            <h5 class="fw-bold mt-1 mb-3">Search Engine Optimization</h5>
            <p class="text-muted mb-4">Improve your ranking and how your product page will appear in search engines results.</p>
            <p>Here is a preview of your search engine result, play with it!</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-success">https://permissible-impulse.demo.prestashop.com/en/home/21-.html</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <label class="form-control-label mb-1">Meta title</label>
                    <input type="text" class="form-control" placeholder="To have a different title from the product name, enter it here.">
                </div>
            </div>
        </div>
        <div class="mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <label class="form-control-label mb-1">Meta description</label>
                    <textarea class="form-control" placeholder="To have a different description than your product summary in search results pages, write it here."></textarea>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col-lg-4">
                    <label class="form-control-label mb-1">Friendly URL</label>
                    <input type="text" class="form-control" placeholder="To have a different title from the product name, enter it here.">
                </div>
                <div class="col-lg-2 pt-1">
                    <button class="btn btn-outline-secondary mt-4">Reset URL</button>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-primary background-primary">
                        <p><span class="fw-bold">Friendly URLs are currently enabled.</span> To disable it, go to <a href="#">SEO and URLs</a></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Start Redirection page inputs--}}
        <div class="mb-4">
            <h5 class="fw-bold mb-4">Redirection page</h5>
            <div class="row">
                <div class="col-lg-6">
                    <label class="form-control-label">Redirection when offline</label>
                    <select class="form-select form-control bordered-select">
                        <option value="" data-select2-id="16">No redirection (404)</option>
                        <option value="1">Permanent redirection (301)</option>
                        <option value="2">Temporary redirection (302)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-primary background-primary">
                        <p class="alert-text">
                            No redirection (404) = Do not redirect anywhere and display a 404 "Not Found" page.<br>
                            Permanent redirection (301) = Permanently display another product or category instead.<br>
                            Temporary redirection (302) = Temporarily display another product or category instead.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Redirection page inputs--}}
    </div>
</div>
