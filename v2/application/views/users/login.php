<?php echo validation_errors(); ?>
<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="jumbotron">
                <h2 class="text-center">Please Login</h2><br>
                <?php echo form_open('users/login'); ?>
                <div class="form-group">
                    <select name="type" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">Student</option>
                        <option value="3">Teacher</option>
                        <option value="4">Parent</option>
                        <option value="5">Non Academic</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required=""
                           autofocus=""/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                </div>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
