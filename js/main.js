$(document).ready(function(){
  console.log($('#guardForm').form());

 /* $('#guardForm').validate({
    messages: {
        guard_name: "This is a test"
    }
  });*/

  $('#guardForm').form({
    fields: {
        guard_name: {
          identifier: 'guard_name',
          rules: [{
            type: 'empty',
            prompt: 'Please enter a your name',
          }]
        }
    }
  })

  var options =  {
      onComplete: function(cep) {
        //alert('CEP Completed!:' + cep);
      },
      onKeyPress: function(cep, event, currentField, options){
        console.log('A key was pressed!:', cep, ' event: ', event,
                    'currentField: ', currentField, ' options: ', options);
      },
      onChange: function(cep){
        console.log('cep changed! ', cep);
      },
      onInvalid: function(val, e, f, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
  };


  $("#resumeUpload").change(function() {
    readURL(this, '.imagePreviewStripResume');
  });

  $("#guardCardUpload").change(function() {
    readURL(this, '.imagePreviewStripGuardCard');
  });

  $("#uploadCert").change(function() {
    readURL(this, '.imagePreviewStripCert');
  });



  //$('.name').mask('/[A-Za-z]/');
  $('.phone_us').mask('(000) 000-0000', options);




  function readURL(input, previewId) {
    console.log(input.files)
    if (input.files && input.files[0] && input.files.length > 0) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var div = document.createElement('DIV');
            div.className = "imagePreviewContainer";

            var icon = document.createElement('I');
            icon.className = "close link icon";

            var imageDiv = document.createElement('DIV');
            imageDiv.className = "imagePreview";
            $(imageDiv).css('background-image', 'url('+e.target.result +')');
            $(imageDiv).hide();
            $(imageDiv).fadeIn(650);

            div.appendChild(icon);
            div.appendChild(imageDiv);

            $(previewId).append(div);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
});
