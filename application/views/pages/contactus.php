<?=script_tag("jquery-validation/jquery.validate.min", true)?>
<section class="spaced">
<div class="form">
        <div class="left-div"><img src="/public/images/contactus_graphic.svg" height="400" width="500"></div>
        <div class="right-div">
            <?php echo validation_errors();?>
        <?php echo form_open('/pages/login', array("id"=>"message-form")); ?>
        <?=form_field(['name'=>'username', 'placeholder'=>'Name', 'required'=>'true', 'maxlength'=>'15', 'minlength'=>'4','icon'=>'face'])?>
        <?=form_field(['name'=>'password', 'placeholder'=>'Email', 'required'=>'true', 'maxlength'=>'20', 'minlength'=>'8','icon'=>'mail'])?>
                <?=form_field(['name'=>'username', 'placeholder'=>'Subject', 'required'=>'true', 'maxlength'=>'15', 'minlength'=>'4','icon'=>'subject'])?>
        <?=form_field(['name'=>'password', 'placeholder'=>'Body', 'required'=>'true', 'maxlength'=>'20', 'minlength'=>'8',"icon"=>"textsms", "type"=>"textarea"])?>

        <div class="margin"><?php
                echo component("button_button", ["icon"=>"send", "text"=>"Send Email","type"=>"submit"])
            ?></div></form>
                       
               


            
        </div>
    </div>
</section>
