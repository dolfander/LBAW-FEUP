<div class="container-fluid review-section" data-id="{{ $product->id }}">
    <div class="row ml-5">
        <div class="col-md-3 ">
            <h3>Reviews</h3>
        </div>
    </div>

    <div class="row m-2">
        <div class="col-md-12">
            <hr/>

            <?php foreach($reviews as $review) {
                ?>
                @include('product.review')
            <?php } ?>

            @if(Auth::check())
            <form class="submit-review">
                <div class="form-group">
                    <label for="Textarea1">Rate {{$product->name}}</label>
                    <div class="review-block-rate">
                        <button type="button" class="btn btn-outline-dark btn-sm" aria-label="Left Align" >
                            <i class="fa fa-star"></i>
                        </button>
                        <button type="button" class="btn btn-outline-dark btn-sm" aria-label="Left Align" >
                            <i class="fa fa-star"></i>
                        </button>
                        <button type="button" class="btn btn-outline-dark btn-sm" aria-label="Left Align" >
                            <i class="fa fa-star"></i>
                        </button>
                        <button type="button" class="btn btn-outline-dark btn-sm" aria-label="Left Align" >
                            <i class="fa fa-star"></i>
                        </button>
                        <button type="button" class="btn btn-outline-dark btn-sm" aria-label="Left Align" >
                            <i class="fa fa-star"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                        <textarea class="form-control" id="comment" rows="4" placeholder="Leave your opinion"></textarea>
                </div>
                <div class="form-group">
                        <button id="submit_review" type="submit" class="btn btn-dark ">Submit Review</button>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>