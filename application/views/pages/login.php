<section class="spaced">
<div class="form">
        <div class="left-div"></div>
        <div class="right-div">
        <?=form_field(['name'=>'name', 'placeholder'=>'Your Name', 'required'=>'true', 'maxlength'=>'64', 'minlength'=>'3','icon'=>'face'])?>
        <?=form_field(['name'=>'username', 'placeholder'=>'User-Name', 'required'=>'true', 'maxlength'=>'15', 'minlength'=>'4','icon'=>'face'])?>
        <?=form_field(['name'=>'password', 'placeholder'=>'Password', 'required'=>'true', 'maxlength'=>'20', 'minlength'=>'8', 'type'=>'password','icon'=>'security'])?>
        <?=form_field(['name'=>'email', 'placeholder'=>'Email Id', 'required'=>'true', 'maxlength'=>'64', 'minlength'=>'3','icon'=>'mail'])?>
        <?=form_field(['name'=>'mobile', 'placeholder'=>'Mobile Number', 'required'=>'true', 'maxlength'=>'10', 'minlength'=>'10','icon'=>'phone'])?>
        <?php
                echo component("button_button", ["icon"=>"send", "text"=>"Sign-Up"])
            ?>
            <p class="caption">Already have an account? Then</p>
        
        <a href="#"><?php
                echo component("button_button", ["text"=>"Sign-In"])
            ?>
            </a>
            
        </div>
    </div>
</section>
