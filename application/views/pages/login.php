<?=script_tag("jquery-validation/jquery.validate.min", true)?>
<section class="spaced">
<div class="form">
        <div class="left-div"><img src="/public/images/login_graphic.svg" height="400" width="500"></div>
        <div class="right-div">
            <?php echo validation_errors();?>
        <?php echo form_open('/pages/login', array("id"=>"message-form")); ?>
        <?=form_field(['name'=>'username', 'placeholder'=>'User-Name', 'required'=>'true', 'maxlength'=>'15', 'minlength'=>'4','icon'=>'face'])?>
        <?=form_field(['name'=>'password', 'placeholder'=>'Password', 'required'=>'true', 'maxlength'=>'20', 'minlength'=>'8', 'type'=>'password','icon'=>'security'])?>
        
        <div class="margin"><?php
                echo component("button_button", ["icon"=>"send", "text"=>"Login"])
            ?>
            <a href="/signup"><?php
                echo component("button_button", ["icon"=>"link","text"=>"Sign-Up"])
            ?>  </a>          <br>
            <?php
                echo component("button_button", ["icon"=>"person_outline", "text"=>"Login With Linkedin", "id"=>"linkedin" ,"style"=>"margin-top:1.5rem;"])
            ?>
            </div>

            </form>
            
        </div>
    </div>
</section>
