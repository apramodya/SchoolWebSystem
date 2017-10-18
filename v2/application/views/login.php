<style>

    body {
        background: #eee !important;
    }

    .wrapper {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .form-signin {
        max-width: 380px;
        padding: 15px 35px 45px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1);

    .form-signin-heading,
    .checkbox {
        margin-bottom: 30px;
    }

    .checkbox {
        font-weight: normal;
    }

    .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        margin-top: 20px;
        padding: 30px;
    @include box-sizing(border-box);

    &:focus {
         z-index: 2;
     }
    }

    input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    input[type="password"] {
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    }


</style>
<br>

<div class="pull-right">
    <a class="btn btn-default" href="<?php echo site_url('/welcome'); ?>">Home</a>
</div>
<?php echo validation_errors(); ?>
<div class="wrapper">
    <?php echo form_open('verifylogin','class="form-signin"'); ?>
        <h2 class="form-signin-heading">Please login</h2>
        <select name="type" id="" class="form-control">
            <option value="1">Admin</option>
            <option value="2">Student</option>
            <option value="3">Teacher</option>
            <option value="4">Parent</option>
            <option value="5">Non Academic</option>
        </select>
        <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>
<?php echo form_close(); ?>