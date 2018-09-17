<div class="container">
    <div class="card card-container">
        <div class="align-center">
            <h4>Create new Route</h4>
        </div>
        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <a href="#" class="hi-icon hi-icon-location align-icon-center">location</a>
        </div>
        <form class="form-signin" action="/store_demand" method="POST" enctype="multipart/form-data">
            @csrf
            <span id="reauth-email" class="reauth-email"></span>
            <input input type="file" name="demand" id="demand" class="form-control" placeholder="default_enlistment_time" required>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Register</button>
        </form><!-- /form -->

    </div><!-- /card-container -->
</div><!-- /container -->