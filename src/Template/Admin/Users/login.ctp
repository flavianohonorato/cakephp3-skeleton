<h1>Login</h1>
<div class="message-danger">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Flash->render() ?>
</div>

<?= $this->Form->create(); ?>
	<?= $this->Form->input( 'email', [
        'label'=> false,
        'class'=>'form-control',
        'placeholder'=>'email@flaviano.com.br',
        'type'	=> 'email'
    ]) ?>
	<?= $this->Form->input( 'password', [
        'label'=> false,
        'class'=>'form-control',
        'placeholder'=>'Senha',
        'type'	=> 'password'
    ]) ?>
<?= $this->Form->button(__('Login'), ['class' => 'btn btn-flat btn-primary btn-lg', 'type' => 'submit', 'id' => 'login-button']) ?>
<?= $this->Form->end() ?>
