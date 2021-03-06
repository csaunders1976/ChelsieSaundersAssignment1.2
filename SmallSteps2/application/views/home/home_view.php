<div class="row">


    <div class="span6" id="login">
        <form id="login-form" class="form-horizontal" method="post" action="<?php echo site_url('api/login')?>">
            <div class="control-group">
                <label class="control-label">Login</label>
                <div class="controls">
                    <input type="text" name="login" class="input-large">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                    <input type="password" name="password" class="input-large">
                </div>
            </div>
            <div class="control-group">

                <div class="controls">
                    <input type="submit" value="login" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

    <div class="span6" >


          <!--  <a href="<?=site_url('home/register')?>">Register</a>-->

                    <div id="register_form_error" class="alert alert-error"><!--dynamic--></div>

                    <form id="register_form" class="form-horizontal" method="post" action="<?php echo site_url('api/register')?>">
                        <div class="control-group">
                            <label class="control-label">First Name</label>
                            <div class="controls">
                                <input type="text" name="firstname" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Last Name</label>
                            <div class="controls">
                                <input type="text" name="lastname" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Login</label>
                            <div class="controls">
                                <input type="text" name="login" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" name="email" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls">
                                <input type="password" name="password" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Confirm Password</label>
                            <div class="controls">
                                <input type="password" name="confirm_password" class="input-large">
                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <input type="submit" value="register" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>

               <!-- <div class="span6" >
                    <form class="form-horizontal">

                      <!--  <a href="<?=site_url('/')?>">back</a>-->


                </div>
            </div>

            <script type="text/javascript">

                $(function() {
                    console.log("ready!");
                    $("#register_form_error").hide();

                    $("#register_form").submit(function(evt) {

                        evt.preventDefault();
                        var url = $(this).attr('action');
                        var postData = $(this).serialize();

                        $.post(url, postData, function(o) {
                            if (o.result == 1) {
                                window.location.href = '<?=site_url('dashboard')?>';
                            } else {
                                $("#register_form_error").show();
                                var output = '<ul>';
                                for (var key in o.error) {
                                    var value = o.error[key];
                                    output += '<li>' + value + '</li>';
                                }
                                output += '</ul>';
                                $("#register_form_error").html(output);
                            }
                        }, 'json');

                    });

                });
            </script>


    </div>

<!--
<script type="text/javascript">
    $(function() {

        $("#login_form").submit(function(evt) {
            evt.preventDefault();
            var url = $(this).attr('action');
            var postData = $(this).serialize();

            $.post(url, postData, function(o) {
                if (o.result == 1) {
                    window.location.href = '<?=site_url('dashboard')?>';
                } else {
                    alert('Invalid Login');
                }
            }, 'json');

        });

    });
</script>
