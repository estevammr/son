// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  // $("form[name='registration']").validate({
  //   // Specify validation rules
  //   rules: {
  //     // The key name on the left side is the name attribute
  //     // of an input field. Validation rules are defined
  //     // on the right side
  //    'firstname[]': {
  //       required: {
  //         depends: function(element) {
  //           //return !$("input[name='email[]']:checked").length > 0
  //            return !$('input[type=checkbox]:checked').length > 0;
  //           }
  //         }
  //       },
  //    'email[]': {
  //       required: {
  //         depends: function(element) {
  //            //return !$("input[name=firstname[]']:checked").length > 0
  //            return !$('input[type=checkbox]:checked').length > 0;
  //         }
  //       } 
  //     }
  //   },
  //   // Specify validation error messages
  //   messages: {
  //     'firstname[]': "Please enter your firstname",
  //     'email[]': null
  //   },
  //   // Make sure the form is submitted to the destination defined
  //   // in the "action" attribute of the form when valid
  //   submitHandler: function(form) {
  //     form.submit();
  //   }
  // });

  //  $("input[type='checkbox']:checked").on('change', function() {
  //     $("form[name='registration']").validate();
  // });

  $.validator.addMethod('require-one', function (value) {
              return $('.require-one:checked').size() > 0; }, 'Please check at least one box.');

var checkboxes = $('.require-one');
var checkbox_names = $.map(checkboxes, function(e,i) { return $(e).attr("name")}).join(" ");

$("#itemForm").validate({ 
    groups: { checks: checkbox_names },
    errorPlacement: function(error, element) {
             if (element.attr("type") == "checkbox") 
               error.insertAfter(checkboxes.last());
             else
               error.insertAfter(element);
    }         
});
});