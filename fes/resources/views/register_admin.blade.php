<div class="container">
    <div class="card card-container">
        <div class="align-center">
            <h4>Create new user</h4>
        </div>

        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="/register" method="POST">
            @csrf
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="mar-bot5">
                <h5>Type:</h5>
                <select class="form-control" name="type">
                    <option value="admin">Admin</option>
                    <option value="consultant">Consultant</option>
                </select>
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Register</button>
        </form><!-- /form -->

    </div><!-- /card-container -->
</div><!-- /container -->