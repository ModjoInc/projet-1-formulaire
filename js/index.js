  $(document).ready(function() {
    $('#form_contact').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nom: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Veuillez entrer votre nom'
                    }
                }
            },
             prenom: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Veuillez entrer votre prénom'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez entrer votre adresse mail'
                    },
                    emailAddress: {
                        message: 'Entrez une adresse mail valide'
                    }
                }
            },
            pays: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez sélectionner votre pays de résidence'
                    }
                }
            },
            message: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Entrez au minimum 10 caractères et au maximum 200 caractères'
                    },
                    notEmpty: {
                        message: 'Veuillez décrire votre problème'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow")
                $('#form_contact').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            let $form = $(e.target);

            // Get the BootstrapValidator instance
            let bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
          let serialized = $form.serialize()
          console.log(serialized);
            $.post($form.attr(' '), serialized, function(result) {
                console.log(result);
            }, 'json');
        });
});
