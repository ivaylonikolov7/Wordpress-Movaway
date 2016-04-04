$(document).ready(function()
{
	var duration='', stage = ''
	function makeItClass(classString)
    {
        switch (classString) {
            case 'COMMERCE & VENTE': return 'commerce'; break;
            case 'ADMINISTRATION & SECRÉTARIAT':  return 'administration'; break;
            case 'LOGISTIQUE & SUPPLY CHAIN': return 'logistique'; break;
            case 'DROIT' : return  'droit'; break;
            case 'MANAGEMENT & RH': return 'management'; break;
            case 'FINANCE & COMPTABILITÉ': return 'finance'; break;
            case 'MARKETING & COMMUNICATION': return 'marketing'; break;
            case 'ARTS & DESIGN': return 'arts'; break;
        }
    }

	function filterJobs(duration, stage)
	{

		$.post('../wp-admin/admin-ajax.php', {'action': 'filter_job','duration' : duration,'stage': stage},
		function(response)
		{			
			console.log(response);
			var results = response.data.length;
			$('#jobs').html('');

			for(var i =0; i<response.data.length; i++)
			{
				var url = response.data[i][0];
				var title = response.data[i][1];
				var dateOfDepart = response.data[i][2];	
				var duration = response.data[i][3];
				var salary = response.data[i][4];	
				var typeOfStage = response.data[i][5];
				var jobClass = makeItClass(typeOfStage);
				var jobTemplate = 
						'<a href="' + url + '">'+
							'<div class="job ' + (i%2==0 ? 'left' : 'right') + '">' +
			                    '<div class="job-icon ' + jobClass + '"></div>' +
			                    '<div class="job-title">'+
			                        '<h3>' + title + '</h3>' +
			                    '</div>' +
			                    '<div class="clear"></div>' +
			                    '<div class="announced-at">' +
			                        'Commencement le <span class="blue">' + dateOfDepart + '</span>' +
			                    ' </div> '+
			                    '<div class="jobs-column-detail-and-hashtag">' +
			                        '<div class="hashtags jobs-description-column">' +
			                            '<div class="hashtag">#INTERVIEWTRAINING</div>' +
			                            '<div class="hashtag">#ACOMODATION</div>' +
			                        '</div>'
			                       	+ '<div class="duration-and-price jobs-description-column">' +
			                            '<div class="duration">' + duration + '</div>' + 
			                            '<div class="price">' + salary + '</div>' + 
			                        '</div>' +
			                        '<div class="clear"></div>' +
			                    '</div>' +
			                '</div>' +
			            '</a>';						
	            
				$('#jobs').append(jobTemplate);					
			}
			$('.results').html(results +' RESULTATS');				
		})
	}
	$('#right-filter .sod_option').click(function()
	{
	 	duration = $(this).html()
		filterJobs(duration, stage)
		
	})
	$('#left-filter .sod_option').click(function()
	{
		stage = $(this).html();
		filterJobs(duration, stage)
	})

})