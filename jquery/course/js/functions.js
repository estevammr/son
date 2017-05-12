$(document).ready(function() {
  $("#testChecks").validate({
    rules: {
      'checkName1[]': {
        required: {
          depends: function() {
            if (!$("input[name='checkName2[]']").is(':checked') && $('#myText').val().length() == 0) {
              return true;
            }
          }
        }
      },
      'checkName2[]': {
        required: {
          depends: function() {
            if (!$("input[name='checkName1[]']").is(':checked') && $('#myText').val().length() == 0) {
              return true;
            }
          }
        }
      },
      'myText': {
        required: {
          depends: function() {
            if (!$("input[name='checkName1[]']").is(':checked') || !$("input[name='checkName2[]']").is(':checked')) {
              return true;
            } 
          }
        }
      }
    },
    messages: {
      'checkName1[]': {
        required: 'Informe os menos um check'
      },
      'checkName2[]': null,
      'myText': null
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});