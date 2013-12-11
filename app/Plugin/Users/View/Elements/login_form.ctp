<?php echo $this->Form->create('User', array('url' => array('plugin' => 'users', 'controller' => 'users', 'action' => 'login')));?>
    <fieldset>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__d('croogo', 'Submit'));?>
<ul>
    <li>No account?
        <?php 
            echo $this->Html->link(__d('croogo', 'Register here'), array('plugin' => 'accelerator', 'controller' => 'ideas', 'action' => 'add')); 
        ?>
    </li>
    <li>
        <?php
            echo $this->Html->link(__d('croogo', 'Forgot your password?'), array('plugin' => 'users', 'controller' => 'users', 'action' => 'forgot')); 
        ?>
    </li>
</ul>