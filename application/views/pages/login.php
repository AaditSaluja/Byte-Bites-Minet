<?=script_tag("jquery-validation/jquery.validate.min", true)?>
<section class="spaced">
<div class="form">
        <div class="left-div"></div>
        <div class="right-div">
            <?php echo validation_errors();?>
        <?php echo form_open('/pages/login', array("id"=>"message-form")); ?>
        <?=form_field(['name'=>'username', 'placeholder'=>'User-Name', 'required'=>'true', 'maxlength'=>'15', 'minlength'=>'4','icon'=>'face'])?>
        <?=form_field(['name'=>'password', 'placeholder'=>'Password', 'required'=>'true', 'maxlength'=>'20', 'minlength'=>'8', 'type'=>'password','icon'=>'security'])?>
        <?php
                echo component("button_button", ["icon"=>"send", "text"=>"Sign-In"])
            ?>
            </form>
            <p class="caption">Don't have an account? Then <a href="#"><?php
                echo component("button_button", ["text"=>"Sign-Up"])
            ?>
            </a></p>
            
        </div>
    </div>
</section>
