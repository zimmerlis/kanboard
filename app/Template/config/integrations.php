<div class="page-header">
    <h2><?= t('Integration with third-party services') ?></h2>
</div>

<form method="post" action="<?= $this->url->href('config', 'integrations') ?>" autocomplete="off">

    <?= $this->form->csrf() ?>

    <?= $this->hook->render('template:config:integrations', array('values' => $values)) ?>

    <h3><i class="fa fa-google"></i> <?= t('Google Authentication') ?></h3>
    <div class="listing">
    <input type="text" class="auto-select" readonly="readonly" value="<?= $this->url->href('oauth', 'google', array(), false, '', true) ?>"/><br/>
    <p class="form-help"><?= $this->url->doc(t('Help on Google authentication'), 'google-authentication') ?></p>
    </div>

    <h3><i class="fa fa-github"></i> <?= t('Github Authentication') ?></h3>
    <div class="listing">
    <input type="text" class="auto-select" readonly="readonly" value="<?= $this->url->href('oauth', 'github', array(), false, '', true) ?>"/><br/>
    <p class="form-help"><?= $this->url->doc(t('Help on Github authentication'), 'github-authentication') ?></p>
    </div>

    <h3><img src="<?= $this->url->dir() ?>assets/img/gitlab-icon.png"/>&nbsp;<?= t('Gitlab Authentication') ?></h3>
    <div class="listing">
    <input type="text" class="auto-select" readonly="readonly" value="<?= $this->url->href('oauth', 'gitlab', array(), false, '', true) ?>"/><br/>
    <p class="form-help"><?= $this->url->doc(t('Help on Gitlab authentication'), 'gitlab-authentication') ?></p>
    </div>

    <h3><img src="<?= $this->url->dir() ?>assets/img/gravatar-icon.png"/>&nbsp;<?= t('Gravatar') ?></h3>
    <div class="listing">
        <?= $this->form->checkbox('integration_gravatar', t('Enable Gravatar images'), 1, $values['integration_gravatar'] == 1) ?>
    </div>

    <h3><img src="<?= $this->url->dir() ?>assets/img/jabber-icon.png"/> <?= t('Jabber (XMPP)') ?></h3>
    <div class="listing">
        <?= $this->form->checkbox('integration_jabber', t('Send notifications to Jabber'), 1, $values['integration_jabber'] == 1) ?>

        <?= $this->form->label(t('XMPP server address'), 'integration_jabber_server') ?>
        <?= $this->form->text('integration_jabber_server', $values, $errors, array('placeholder="tcp://myserver:5222"')) ?>
        <p class="form-help"><?= t('The server address must use this format: "tcp://hostname:5222"') ?></p>

        <?= $this->form->label(t('Jabber domain'), 'integration_jabber_domain') ?>
        <?= $this->form->text('integration_jabber_domain', $values, $errors, array('placeholder="example.com"')) ?>

        <?= $this->form->label(t('Username'), 'integration_jabber_username') ?>
        <?= $this->form->text('integration_jabber_username', $values, $errors) ?>

        <?= $this->form->label(t('Password'), 'integration_jabber_password') ?>
        <?= $this->form->password('integration_jabber_password', $values, $errors) ?>

        <?= $this->form->label(t('Jabber nickname'), 'integration_jabber_nickname') ?>
        <?= $this->form->text('integration_jabber_nickname', $values, $errors) ?>

        <?= $this->form->label(t('Multi-user chat room'), 'integration_jabber_room') ?>
        <?= $this->form->text('integration_jabber_room', $values, $errors, array('placeholder="myroom@conference.example.com"')) ?>

        <p class="form-help"><?= $this->url->doc(t('Help on Jabber integration'), 'jabber') ?></p>
    </div>

    <h3><img src="<?= $this->url->dir() ?>assets/img/hipchat-icon.png"/> <?= t('Hipchat') ?></h3>
    <div class="listing">
        <?= $this->form->checkbox('integration_hipchat', t('Send notifications to Hipchat'), 1, $values['integration_hipchat'] == 1) ?>

        <?= $this->form->label(t('API URL'), 'integration_hipchat_api_url') ?>
        <?= $this->form->text('integration_hipchat_api_url', $values, $errors) ?>

        <?= $this->form->label(t('Room API ID or name'), 'integration_hipchat_room_id') ?>
        <?= $this->form->text('integration_hipchat_room_id', $values, $errors) ?>

        <?= $this->form->label(t('Room notification token'), 'integration_hipchat_room_token') ?>
        <?= $this->form->text('integration_hipchat_room_token', $values, $errors) ?>

        <p class="form-help"><?= $this->url->doc(t('Help on Hipchat integration'), 'hipchat') ?></p>
    </div>

    <h3><i class="fa fa-slack fa-fw"></i>&nbsp;<?= t('Slack') ?></h3>
    <div class="listing">
        <?= $this->form->checkbox('integration_slack_webhook', t('Send notifications to a Slack channel'), 1, $values['integration_slack_webhook'] == 1) ?>

        <?= $this->form->label(t('Webhook URL'), 'integration_slack_webhook_url') ?>
        <?= $this->form->text('integration_slack_webhook_url', $values, $errors) ?>
        <?= $this->form->label(t('Channel/Group/User (Optional)'), 'integration_slack_webhook_channel') ?>
        <?= $this->form->text('integration_slack_webhook_channel', $values, $errors) ?>

        <p class="form-help"><?= $this->url->doc(t('Help on Slack integration'), 'slack') ?></p>
    </div>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
    </div>
</form>