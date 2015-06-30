textField = function(field, minLength, maxLength) {
  return {
    message: field + " is not valid",
    validators: {
      notEmpty: {
        message: "The " + field + " is required and cannot be empty."
      },
      stringLength: {
        min: minLength,
        max: maxLength,
        message: "The " +
          field +
          " must be more than " +
          minLength +
          " and less than " +
          maxLength +
          " characters long."
      },
      regexp: {
        regexp: /^[a-zA-Z0-9_]+$/,
        message: "The " +
          field +
          " can only consist of alphabetical, number, and underscore characters."
      }
    }
  }
};

$(document).ready(function() {
  /* Bootstrap Validator */
  if (typeof validation_fields === 'undefined') { return; };
  $("#subscribeForm").bootstrapValidator({
    feedbackIcons: {
      valid: "glyphicon glyphicon-ok",
      invalid: "glyphicon glyphicon-remove",
      validating: "glyphicon glyphicon-refresh"
    },
    trigger: "blur",
    message: "This value is not valid",
    fields: validation_fields
  });


  var lang = $('html').attr('lang');

  if (lang) {
    $('#language-preference option[data-iso-val="'+lang+'"]').eq(0).attr('selected', 'selected');
  };
});
