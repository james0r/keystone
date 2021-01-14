<div role="dialog" id="appointment-modal" aria-labelledby="dialog1_label" aria-modal="true" class="appointment-modal">
  <h3>
    Schedule An Appointment
  </h3>
  <div class="dialog_form">
    <form action="">
      <input type="text" name="fullname">
      <input type="email" name="email">
      <input type="text" name="datetime">
    </form>
  </div>
</div>

<script>
  $(function() {
    $('#appointment-modal input[name="datetime"]').datetimepicker({
      inline: true,
    });
  })
</script>