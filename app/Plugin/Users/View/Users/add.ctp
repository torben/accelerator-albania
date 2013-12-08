<section class="users register">
    <header>
        <h2><?php echo $title_for_layout; ?></h2>
    </header>
    <div>
        <?php echo $this->Form->create('User');?>
            <fieldset>
                <?php
                  echo $this->Form->input('username');
                  echo $this->Form->input('password', array('value' => ''));
                  echo $this->Form->input('verify_password', array('type' => 'password', 'value' => ''));
                  echo $this->Form->input('name');
                  echo $this->Form->input('email');
                  echo $this->Form->input('website');
                ?>
            </fieldset>
        <?php echo $this->Form->end('Submit');?>
    </div>
</section>

<?php
    echo $this->element('hapide_description', array(), array('plugin' => 'Accelerator'));
?>
