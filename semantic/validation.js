$(document).ready(function() {
$('.contact-form')
  .form({
    fields: {
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Vänligen fyll i din email'
          }
        ]
    },
      name: {
        identifier: 'name',
        rules: [
          {
            type   : 'empty',
            prompt : 'Vänligen fyll i ditt namn'
          }
        ]
      },
      company: {
        identifier: 'company',
        rules: [
          {
            type   : 'empty',
            prompt : 'Vänligen ange företag'
          }
        ]
      }
    }
  });

});