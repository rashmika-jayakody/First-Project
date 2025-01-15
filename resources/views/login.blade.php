 <!-- Login Form -->
 <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
    <form action="/login" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="loginEmail">Email</label>
            <input type="email" name="loginemail" id="loginEmail" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" name="loginpassword" id="loginPassword" class="form-control" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
</div>
