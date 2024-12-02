<section class="category-hero py-lg-16 pt-8 pb-8">
    <!-- container -->

    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                <div class="row text-center">
                    <!-- col -->

                    <div class="col-md-12 px-md-16 mb-4 mt-6">

                    </div>
                </div>

                <div class="row align-items-start">
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- heading -->
                        <h2 class="h1 fw-bold mt-3 category-heading mb-4">
                            Aloe Vera Farmers
                        </h2>
                        <div class="mb-8 mb-lg-0 me-lg-4">
                            <!-- text -->
                            <p class="display-6 fs-2 mb-4 ">
                                "Farmers, showcase your aloe vera effectively! Provide detailed quantities, competitive
                                prices, and clear specifications to market your aloe vera smartly and attract the best
                                buyers."</p>
                        </div>


                    </div>
                    <!-- col -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <div>
                            <!-- Img -->
                            <img src="/assets/images/farmer-aloe-vera.webp" alt="" class="img-fluid rounded-3 w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="farmer-form" class="container p-3 farmers-from">
    <!-- Card -->
    <div class="card mb-4">
        <!-- Card Header -->
        <div class="card-header">
            <h3 class="mb-0"> Fill the platform</h3>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <!-- Form -->
            <form class="row" action="/categories/farmers-upload" method="POST" enctype="multipart/form-data">
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Full Name"
                           required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="phone">Phone Number </label>
                    <input type="text" id="phone" name="phone_number" class="form-control" placeholder="Phone" required>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label class="form-label">Cactus Type</label>
                    <select class="form-select" data-width="100%">
                        <option value="">Select Type</option>
                        <option value="medicinal">Medicinal</option>
                        <option value="industrial">Industrial</option>
                        <option value="ornamental">Ornamental</option>
                    </select>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label class="form-label" for="zipCode">Available Quantity</label>
                    <input type="number" id="AvailableQuantity" class="form-control" placeholder="Available Quantity"
                           required pattern="^[1-9]\d*$" inputmode="numeric">
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label class="form-label" for="zipCode">Price</label>
                    <input type="number" id="price" class="form-control" placeholder="Price" required>
                    <!-- radio-->
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Negligible
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Non-Negligible
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-12">
                    <div id="map"></div>
                    <input type="text" id="latitude" readonly hidden>
                    <input type="text" id="longitude" readonly hidden>
                    <div class="form-control">
                        <label for="address">Pick Your Location or Add Your Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter your address">
                    </div>
                </div>
                <!-- Textarea -->
                <div class="mb-4">
                    <label for="textarea-input" class="form-label">Additional Details (Optional)</label>
                    <textarea class="form-control" name="additional-details" id="textarea-input"
                              placeholder="Additional Details"></textarea>
                </div>
                <div class="mb-3 col-12 col-md-12">
                    <div class="mb-3">
                        <label for="imageUpload" class="form-label">Upload Images</label>
                        <input type="file" class="form-control" id="imageUpload" accept="image/*" multiple>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>