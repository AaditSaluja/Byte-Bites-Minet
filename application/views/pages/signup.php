<?=script_tag("jquery-validation/jquery.validate.min", true)?>
<section class="spaced">
<div class="form">
<div class="left-div"><img src="/public/images/signup_graphic.svg" height="400" width="500"></div>
        <div class="right-div">
            <?php echo validation_errors();?>
        <?php echo form_open('/pages/signup', array("id"=>"message-form")); ?>
        <?=form_field(['name'=>'name', 'placeholder'=>'Your Name', 'required'=>'true', 'maxlength'=>'64', 'minlength'=>'3','icon'=>'face'])?>
        <?=form_field(['name'=>'username', 'placeholder'=>'User-Name', 'required'=>'true', 'maxlength'=>'15', 'minlength'=>'4','icon'=>'face'])?>
        <?=form_field(['name'=>'password', 'placeholder'=>'Password', 'required'=>'true', 'maxlength'=>'20', 'minlength'=>'8', 'type'=>'password','icon'=>'security'])?>
        <?=form_field(['name'=>'email', 'placeholder'=>'Email Id', 'required'=>'true', 'maxlength'=>'64', 'minlength'=>'3','icon'=>'mail', 'type'=>'email'])?>
        <?=form_field(['name'=>'mobile', 'placeholder'=>'Mobile Number', 'required'=>'true', 'maxlength'=>'10', 'minlength'=>'10','icon'=>'phone'])?>
        
        <?php
                echo component("button_button", ["icon"=>"send", "text"=>"Sign-Up"])
            ?>
            
        </form>
            
            <a href="/login">
            <?php
                echo component("button_button", ["icon"=>"send", "text"=>"Login", "id"=>"login" ,"style"=>"margin-top:1.5rem;"])
            ?>
            </a>
           
            <?php
                echo component("button_button", ["icon"=>"person_outline","text"=>"Login With Linkedin", "id"=>"linkedin" ,"style"=>"margin-top:1.5rem;","onclick"=>"linkedin()"])
            ?>
            
        </div>
    </div>
</section>
<script>
        function linkedin() {
            IN.User.authorize(redirect);
        }
        function redirect(){
            window.location.assign("/homel");
            <?=$this->session->set_userdata("loggedin", TRUE);?>
        }
    </script>
