$(document).ready(function() {
	console.log("fbasdflk");

	var rules = {
		required : {
			check : function(field) {
				if (field.val() == "")
					return false;
				return true;
			}
		},
		email : {
			check : function(field) {
				if (field.val().match(/.+@.+\..+/))
					return true;
				return false;
			}
		},
		selected: {
			check : function(field) {
				if (field.val() == "") {
					for (var element in field[0].elements) {
						element = field[0].elements[element];
						if (element.checked)
							return true;
					}
					return false;
				}
				if (field.val() == "none")
					return false;
				return true;
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

					if (validator.check(field)) {
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

