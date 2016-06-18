<h2>Install Flarum</h2>

<p>Set up your forum by filling out your details below. If you have a problem when installing, report your issues <a href="https://github.com/darwintheory/openshift-flarum-quickstart/issues" target="_blank">Here</a>.</p>

<form method="post">
  <div id="error" style="display:none"></div>

  <div class="FormGroup">
    <div class="FormField">
      <label>Forum Title</label>
      <input name="forumTitle">
    </div>
    </div>
    <div class="FormGroup">
    <div class="FormField">
      <label>Table Prefix</label>
      <input type="text" name="tablePrefix">
    </div>
    <div class="FormField">
      <label>Admin Username</label>
      <input name="adminUsername">
    </div>

    <div class="FormField">
      <label>Admin Email</label>
      <input name="adminEmail">
    </div>

    <div class="FormField">
      <label>Admin Password</label>
      <input type="password" name="adminPassword">
    </div>

    <div class="FormField">
      <label>Confirm Password</label>
      <input type="password" name="adminPasswordConfirmation">
    </div>
  </div>

  <div class="FormButtons">
    <button type="submit">Install Flarum</button>
  </div>
</form>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
$(function() {
  $('form :input:first').select();

  $('form').on('submit', function(e) {
    e.preventDefault();

    var $button = $(this).find('button')
      .text('Please Wait...')
      .prop('disabled', true);

    $.post('', $(this).serialize())
      .done(function() {
        window.location.reload();
      })
      .fail(function(data) {
        $('#error').show().text('Something went wrong:\n\n' + data.responseText);

        $button.prop('disabled', false).text('Install Flarum');
      });

    return false;
  });
});
</script>
