$(document).ready(function(){
	
	var count = 0;
	var number =1;
	var id;
	var actors = $("#actors").val();
	// alert(actors);
	
	// var text = '<p>test</p>'
	$('#addProgram').click(function(){	
		//number=count+1;
		//alert('lalalalal');
		var text = '<div id="prgram_'+count+'" class="program">'+
				// '<label for="programid">No.</label>'+
				// '<input type="input" name="programid" style="width:50px;">'+
				'<label for="programname_'+count+'">Name</label>'+
				'<input type="input" name="programname_'+count+'">'+
				'<label for="actors'+count+'" style="margin-right:10px;">Actors</label>'+
				'<select class="chzn-select" name="actors_'+count+'[]" style="width: 415px;" multiple="true" data-placeholder="Choose actors">'+
					'<option value=""></option>'+
					actors+
				'</select>'+
				'<a class="deleteProgram" href="'+count+'" style="width:30px; height:30px; margin-right:40px;">Delete the program</a>'+
				'</div><br>';
		$('.programs').append(text);
		count += 1;
		number +=1;

		$( ".deleteProgram" ).button({
			icons: {
			primary: "ui-icon-trash"
			},
			text: false
			});
		$(".chzn-select").chosen();
		$('.program').on("click",".deleteProgram",function(e){
	       id = $(this).attr('href');
	       // alert(id);
	       if (this.value=='search') this.value = ''
	       // $(this).parent().slideUp('fast');
	   		$(this).parent().remove();
	       e.preventDefault();
	    });
	});

	$( ".datepicker" ).datepicker();
	$('#starttime').timepicker({ 'timeFormat': 'H:i' });

	$( "#addProgram" ).button({
		icons: {
		primary: "ui-icon-plus"
		}
		});
	
	$( "button" ).button();


	

});


		