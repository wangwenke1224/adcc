$(document).ready(function(){
	var count = 0;
	var actors = <?php echo $actors; ?>;
	// var text = '<div id="prgram_'+count+'">'+
	// 			'<label for="programname">Program '+number+'</label>'+
	// 			'<input type="input" name="programname">'+
	// 			'<label for="actors" style="margin-right:10px;">Actors</label>'+
	// 			'<select class="chzn-select" name="actors_'+count+'" style="width: 415px;" multiple="true" data-placeholder="Choose actors">'+
	// 				'<option value=""></option>'+
	// 			'</select>'+
	// 			'<button class="deleteProgram" id="" style="width:30px; height:30px; margin-right:40px;">Delete the program</button>'+
	// 			'</div><br>';
	var text = '<p>test</p>'
	$('p#add').click(function(){	
		number=count+1;
		$('.programs').append(text);
		// for (var a in this.actors) {
		// 	$('.chzn-select').append('<option value="'+a["fullname"]+'">'+a["fullname"]+'</option>');
		// };
		count += 1;
	});

};


		