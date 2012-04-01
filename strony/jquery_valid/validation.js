$(document).ready(function() {
	console.log("fbasdflk");

	var rules = {
		required : {
			check : function(value) {
				if (value == "")
					return false;
				return true;
			}
		},
		email : {
			check : function(value) {
				if (value.match(/.+@.+\..+/))
					return true;
				return false;
			}
		}
	}

	$("form").submit(function() {
		var valid = true;

		$(this.elements).each(function() {
			var field = $(this);
			if(field.attr('validation') !== undefined) {
				var validations = field.attr('validation').split(" ");
				console.log(validations);

				for (var validation in validations) {
					validation = validations[validation];
					var validator = rules[validation];
					if (validator == undefined)
						continue;
					console.log(validator);

					if (validator.check(field.val())) {
						console.log("valid");
						field.removeClass("error");
					} else {
						console.log("invalid");
						field.addClass("error");
						valid = false;
					}
				}
			}
		});

		console.log(valid);
		return valid;
	});
});

