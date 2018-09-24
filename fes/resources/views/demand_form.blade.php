
        <form class="form-signin" action="/store_demand" method="POST" enctype="multipart/form-data">
            @csrf
            <span id="reauth-email" class="reauth-email"></span>
            <input input type="file" name="demand" id="demand" class="form-control" placeholder="default_enlistment_time" required>

            <button class="add_margin_bottom_md btn btn-lg btn-primary btn-block btn-signin" type="submit">Register</button>
        </form><!-- /form -->
