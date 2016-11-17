;$(function() {
  var $emailGlyph = $('.glyphicon-email');
  var $emailInput = $('.txt-email');
  var $passwordGlyph = $('.glyphicon-password');
  var $passwordInput = $('.txt-password');
  var $repasswordGlyph = $('.glyphicon-repassword');
  var $repasswordInput = $('.txt-retype-password');

  // ************************************
  // Clicking the label redirects to the input
  if ($emailInput.val() !== "" && $emailInput.val() !== null) {
    if (validateEmail($emailInput.val())) {  // email regex here.
      setGoodFormState($emailInput, $emailGlyph);
    } else { 
      setBadFormState($emailInput, $emailGlyph);
    }
  }
  
  $emailInput.focus(function() {
    setFocusFormState($emailInput, $emailGlyph);
  });
    
  $emailInput.focusout(function() {
    if ($emailInput.val() === "" || $emailInput.val() === null) {
      setDefocusNormalState($emailInput, $emailGlyph);
    } else if (!validateEmail($emailInput.val())) {  // email regex here.
      setBadFormState($emailInput, $emailGlyph);
    } else {
      setGoodFormState($emailInput, $emailGlyph);
    }
  });
  
  $passwordInput.focus(function() {
    setFocusFormState($passwordInput, $passwordGlyph);
    
  });
  
  $passwordInput.focusout(function() {
    if ($passwordInput.val() === "" || $passwordInput.val() === null) {
      setDefocusNormalState($passwordInput, $passwordGlyph);
    } else {  // must fit minimum length
      setGoodFormState($passwordInput, $passwordGlyph);
    }
  });
  
  
  $repasswordInput.focus(function() {
    setFocusFormState($repasswordInput, $repasswordGlyph);
  });
  
  $repasswordInput.focusout(function() {
    if ($repasswordInput.val() === "" || $repasswordInput.val() === null) {
      setDefocusNormalState($repasswordInput, $repasswordGlyph);
    } else {  //must match password
      setGoodFormState($repasswordInput, $repasswordGlyph);
    }
  });
  
  // ************************************
  
  function setGoodFormState(inputClass, glyphClass) {
    inputClass.removeClass('txt-field-focused');
    inputClass.addClass('txt-field-defocused-good');
    inputClass.removeClass('txt-field-defocused-bad');
    glyphClass.removeClass('focused-glyphicon');
  }
  
  function setBadFormState(inputClass, glyphClass) {
    inputClass.removeClass('txt-field-focused');
    inputClass.removeClass('txt-field-defocused-good');
    inputClass.addClass('txt-field-defocused-bad');
    glyphClass.removeClass('focused-glyphicon');
  }
  
  function setDefocusNormalState(inputClass, glyphClass) {
    inputClass.removeClass('txt-field-defocused-bad');
    inputClass.removeClass('txt-field-defocused-good');
    inputClass.removeClass('txt-field-focused');
    glyphClass.removeClass('focused-glyphicon');
  }
  
  function setFocusFormState(inputClass, glyphClass) {
    inputClass.removeClass('txt-field-defocused-bad');
    inputClass.removeClass('txt-field-defocused-good');
    inputClass.addClass('txt-field-focused');
    glyphClass.addClass('focused-glyphicon');
  }
  
  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
});