<form class="form-signin" action="/create_route" method="POST">
    @csrf
    <span id="reauth-email" class="reauth-email"></span>
    <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
    <input type="number" min="1" max="60" name="default_enlistment_time" id="inputDefault_enlistment_time" class="form-control" placeholder="default_enlistment_time" required>
    <input type="time" name="start_time" id="inputStart_time" class="form-control" placeholder="start_time" required>
    <input type="time" name="finish_time" id="inputFinish_time" class="form-control" placeholder="finish_time" required>
    <input type="text" name="start_point" id="inputStart_point" class="form-control" placeholder="start_point" required>
    <input type="text" name="finish_point" id="inputFinish_point" class="form-control" placeholder="finish_point" required>

    <button class="add_margin_bottom_md btn btn-lg btn-primary btn-block btn-signin" type="submit">Register</button>
</form><!-- /form -->